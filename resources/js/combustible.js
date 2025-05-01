const apiUrl = "https://combustible-scraping-production.up.railway.app/";
const ctn = document.getElementById("combustibles");

// Utility: Get current ISO week number
function getCurrentWeek() {
    const now = new Date();
    const onejan = new Date(now.getFullYear(), 0, 1);
    const days = Math.floor((now - onejan) / (24 * 60 * 60 * 1000));
    return Math.ceil((now.getDay() + 1 + days) / 7);
}

function msgType(n) {
    let result = [];
    if (n === 0) {
        result.push("= Igual que la semana pasada");
        result.push("stat-desc font-encodeSans text-md text-grayTitle");
    } else if (n > 0) {
        result.push("↖ Más que la semana pasada");
        result.push("stat-desc font-encodeSans text-md text-red-600");
    } else {
        result.push("↘︎ Menos que la semana pasada");
        result.push("stat-desc font-encodeSans text-md text-green-600");
    }
    return result;
}

function renderData(data) {
    ctn.innerHTML = ""; // Clear existing content
    data.forEach((obj, index) => {
        let diffN = parseFloat((obj.difference ?? "0").replace(/[^0-9.-]/g, ""));
        let stat = document.createElement("div");
        stat.className =
            index === 6
                ? "stat space-y-5 shadow-md md:max-w-[98%]"
                : "stat md:basis-[49%] lg:basis-[32%] space-y-5 shadow-md";
        stat.innerHTML = `
            <div class="stat-title font-encodeSans text-black text-lg">${obj.fuel}</div>
            <div class="stat-value font-encodeSans text-grayTitle/80 text-2xl">${obj.this_week}</div>
            <div class="${msgType(diffN)[1]}">${msgType(diffN)[0]}</div>
        `;
        ctn.appendChild(stat);
    });
}

async function getFuelData() {
    const currentWeek = getCurrentWeek();
    const cachedWeek = localStorage.getItem("fuelDataWeek");
    const cachedData = localStorage.getItem("fuelData");

    if (cachedData && cachedWeek == currentWeek) {
        // Use cached data
        renderData(JSON.parse(cachedData));
    } else {
        try {
            const response = await fetch(apiUrl);
            const data = await response.json();
            renderData(data);
            // Update cache
            localStorage.setItem("fuelData", JSON.stringify(data));
            localStorage.setItem("fuelDataWeek", currentWeek);
        } catch (err) {
            console.error("Error fetching data:", err);
            if (cachedData) {
                console.warn("Using stale cached data due to error.");
                renderData(JSON.parse(cachedData));
            }
        }
    }
}

document.addEventListener("DOMContentLoaded", getFuelData);
