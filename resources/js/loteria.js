const calendar = document.getElementById('calendar');
const today = new Date().toISOString().split("T")[0];
calendar.setAttribute("max", today);

let url = 'https://lotteryscraping-rd-mx85.onrender.com/';
let selectedDate = today;

calendar.addEventListener('change', () => {
    selectedDate = calendar.value;
    fetchAndRenderData(selectedDate);
});

const companyColors = {
    "Nacional": "bg-nacional",
    "Leidsa": "bg-leidsa",
    "Real": "bg-real",
    "Loteka": "bg-loteka",
    "Primera": "bg-primera",
    "La Suerte": "bg-laSuerte",
    "LoteDom": "bg-loteDom",
    "King Lottery": "bg-kingLottery",
    "Anguila": "bg-anguila",
    "Americanas": "bg-americana"
};

// Main function: fetch (or retrieve) and render
async function fetchAndRenderData(date) {
    const formattedDate = date.split('-').reverse().join('-');
    const url = `https://lotteryscraping-rd-mx85.onrender.com/?date=${formattedDate}`;
    const cacheKey = `lotteryData-${date}`;
    const cached = JSON.parse(localStorage.getItem(cacheKey));

    const now = new Date();
    let data = null;

    if (cached && cached.timestamp) {
        const cachedTime = new Date(cached.timestamp);
        const diffMs = now - cachedTime;
        const diffHours = diffMs / (1000 * 60 * 60);

        if (diffHours < 1) {
            data = cached.data;
        }
    }

    if (!data) {
        try {
            const response = await fetch(url);
            data = await response.json();
            localStorage.setItem(cacheKey, JSON.stringify({
                data,
                timestamp: now.toISOString()
            }));
        } catch (err) {
            console.error("Failed to fetch fresh data:", err);
            return;
        }
    }

    renderData(data);
}

function renderData(data) {
    const grouped = data.reduce((acc, item) => {
        const lottery = item.lottery;
        if (!acc[lottery]) acc[lottery] = [];
        acc[lottery].push(item);
        return acc;
    }, {});

    const container = document.getElementById("results-container");
    container.innerHTML = "";

    Object.entries(grouped).forEach(([lotteryName, games]) => {
        const colorClass = companyColors[lotteryName] || "bg-gray-600";

        const companyDiv = document.createElement("div");
        companyDiv.className = `company-block border rounded-t-xl ${colorClass.replace('bg-', 'b-')}`;
        companyDiv.id = `lottery-${lotteryName.toLowerCase().replace(/\s+/g, '-')}`;

        const h3 = document.createElement("h3");
        h3.className = `company-name text-white ${colorClass} max-w-full p-4 rounded-t-xl`;
        h3.textContent = `${lotteryName}`;
        companyDiv.appendChild(h3);

        const sorteosDiv = document.createElement("div");
        sorteosDiv.className = "sorteos";

        games.forEach(game => {
            const gameBlock = document.createElement("div");
            gameBlock.className = "game-block p-4 flex justify-between items-center";

            const gameInfo = document.createElement("div");
            gameInfo.className = "game-info flex flex-col gap-y-5";

            const dateSpan = document.createElement("span");
            dateSpan.className = "game-date w-fit p-2 rounded-xl bg-gray-200 text-xs font-encodeSans text-black";
            dateSpan.textContent = game.date;

            const nameSpan = document.createElement("span");
            nameSpan.className = "game-name font-encodeSans text-md";
            nameSpan.textContent = game.game;

            const resultsUl = document.createElement("ul");
            resultsUl.className = "game-results font-encodeSans text-md flex flex-wrap gap-x-2 gap-y-2";

            game.number.forEach(num => {
                const li = document.createElement("li");
                li.className = "w-12 p-3 bg-lightGreen rounded-full shadow-sm text-center";
                li.textContent = num;
                resultsUl.appendChild(li);
            });

            gameInfo.appendChild(dateSpan);
            gameInfo.appendChild(nameSpan);
            gameInfo.appendChild(resultsUl);

            const logoDiv = document.createElement("div");
            logoDiv.className = "game-logo";

            const img = document.createElement("img");
            img.src = game.image || "https://via.placeholder.com/80";
            img.alt = game.game;
            img.className = "game-img w-20";

            logoDiv.appendChild(img);
            gameBlock.appendChild(gameInfo);
            gameBlock.appendChild(logoDiv);
            sorteosDiv.appendChild(gameBlock);

            const divider = document.createElement("div");
            divider.className = "divider m-0";
            sorteosDiv.appendChild(divider);
        });

        companyDiv.appendChild(sorteosDiv);
        container.appendChild(companyDiv);
    });
}

// Initial load
fetchAndRenderData(today);
