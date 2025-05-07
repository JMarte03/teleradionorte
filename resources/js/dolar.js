const apiUrl = "https://dolareuro-production.up.railway.app/"
const ctn = document.getElementById('ctn')
function msgType(n) {
    let result = []
    if (n == 0){
        result.push('= Igual que ayer')
        result.push('stat-desc font-encodeSans text-md text-grayTitle')
    }
    else if (n > 0){
        result.push('↖ Más que ayer')
        result.push('stat-desc font-encodeSans text-md text-red-600')
    }
    else {
        result.push('↘︎ Menos que ayer')
        result.push('stat-desc font-encodeSans text-md text-green-600')
    }
    return result
}
function convert(n1, n2){
    return n1 * n2 
}
async function fetchData() {
    try {
        const response = await fetch(apiUrl)
        const data = await response.json()
        console.log(data)
        data.forEach((obj) => {
            let diffN = parseFloat(obj.diff.replace(/[^0-9.-]/g, ''));
            let hoyN = parseFloat(obj.hoy.replace(/[^0-9.-]/g, ''));
            let monedaShort = obj.moneda.split(" ")[0];
        
            let stat = document.createElement("div");
            stat.className = "divisa flex flex-col gap-x-3 gap-y-7 md:flex-row";
            stat.innerHTML = `
                <div class="stat space-y-5 rounded-lg shadow-sm">
                    <div class="stat-title font-encodeSans text-black text-lg">${obj.moneda}</div>
                    <div class="stat-value font-encodeSans text-grayTitle/80 text-2xl">${obj.hoy}</div>
                    <div class="${msgType(diffN)[1]}">${msgType(diffN)[0]}</div>
                </div>
                <!-- Conversor de monedas -->
                <div class="bg-lightestGreen p-5 space-y-3">
                    <h3 class="text-md font-encodeSans font-semibold text-grayTitle">${obj.moneda} a DOP</h3>
                    <div class="flex items-center gap-x-3">
                        <fieldset class="fieldset">
                            <input id="${monedaShort}" type="number" class="input" />
                            <p class="label">${obj.moneda}</p>
                        </fieldset>
                        <i class='-mt-6 bx bx-sync'></i>
                        <fieldset class="fieldset">
                            <input id="dop${monedaShort}" type="number" class="input" />
                            <p class="label">DOP</p>
                        </fieldset>
                    </div>
                </div>
            `;
            ctn.appendChild(stat);
        
            // Obtener inputs
            const foreignInput = stat.querySelector(`#${monedaShort}`);
            const dopInput = stat.querySelector(`#dop${monedaShort}`);
        
            // De moneda extranjera a DOP
            foreignInput.addEventListener('input', (e) => {
                const foreignValue = parseFloat(e.target.value);
                dopInput.value = isNaN(foreignValue) ? '' : convert(foreignValue, hoyN).toFixed(2);
            });
        
            // De DOP a moneda extranjera
            dopInput.addEventListener('input', (e) => {
                const dopValue = parseFloat(e.target.value);
                foreignInput.value = isNaN(dopValue) ? '' : convert(dopValue, 1 / hoyN).toFixed(2);
            });
        });
        

    } catch (err) {
        console.log(err)
    }
}
fetchData()