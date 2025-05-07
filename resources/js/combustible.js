const apiUrl = "https://combustible-scraping-production.up.railway.app/"
const ctn = document.getElementById('combustibles')
function msgType(n) {
    let result = []
    if (n == 0){
        result.push('= Igual que la semana pasada')
        result.push('stat-desc font-encodeSans text-md text-grayTitle')
    }
    else if (n > 0){
        result.push('↖ Más que la semana pasada')
        result.push('stat-desc font-encodeSans text-md text-red-600')
    }
    else {
        result.push('↘︎ Menos que la semana pasada')
        result.push('stat-desc font-encodeSans text-md text-green-600')
    }
    return result
}
async function fetchData() {
    try {
        const response = await fetch(apiUrl)
        const data = await response.json()
        data.forEach((obj, index) => {
            let diffN = parseFloat(obj.difference.replace(/[^0-9.-]/g, ''));
            let stat = document.createElement("div")
            if (index == 6){
                stat.className = "stat space-y-5 shadow-md md:max-w-[98%]"
            }
            else {
                stat.className = "stat md:basis-[49%] lg:basis-[32%] space-y-5 shadow-md"
            }
            stat.innerHTML = `
                <div class="stat-title font-encodeSans text-black text-lg">${obj.fuel}</div>
                <div class="stat-value font-encodeSans text-grayTitle/80 text-2xl">${obj.this_week}</div>
                <div class="${msgType(diffN)[1]}">${msgType(diffN)[0]}</div>
            `;
            ctn.appendChild(stat)
        });

    } catch (err) {
        console.log(err)
    }
}
fetchData()