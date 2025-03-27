// Llave de la api
const key = "6ViRYR2zVr5cbG4faoEYQwUGigxQfY5B"; 

// Códigos de los íconos y descripciones del clima (español)
const weatherCodes = {
  1000: {
    desc: "Cielo Despejado",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/10000_clear_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/10001_clear_large.png?raw=true",
  },
  1100: {
    desc: "Mayormente Despejado",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/11000_mostly_clear_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/11001_mostly_clear_large.png?raw=true",
  },
  1101: {
    desc: "Parcialmente Nublado",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/11010_partly_cloudy_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/11011_partly_cloudy_large.png?raw=true",
  },
  1102: {
    desc: "Mayormente Nublado",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/11020_mostly_cloudy_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/11021_mostly_cloudy_large.png?raw=true",
  },
  1001: {
    desc: "Nublado",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/10010_cloudy_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/10010_cloudy_large.png?raw=true",
  },
  2100: {
    desc: "Niebla Ligera",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/21000_fog_light_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/21000_fog_light_large.png?raw=true",
  },
  2000: {
    desc: "Niebla",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/20000_fog_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/20000_fog_large.png?raw=true",
  },
  4000: {
    desc: "Llovizna",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/40000_drizzle_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/40000_drizzle_large.png?raw=true",
  },
  4200: {
    desc: "Lluvia Ligera",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/42000_rain_light_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/42000_rain_light_large.png?raw=true",
  },
  4001: {
    desc: "Lluvioso",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/40010_rain_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/40010_rain_large.png?raw=true",
  },
  4201: {
    desc: "Lluvia Intensa",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/42010_rain_heavy_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/42010_rain_heavy_large.png?raw=true",
  },
  5001: {
    desc: "Ráfagas de Vieve",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/50010_flurries_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/50010_flurries_large.png?raw=true",
  },
  5100: {
    desc: "Nieve Ligera",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/51000_snow_light_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/51000_snow_light_large.png?raw=true",
  },
  5000: {
    desc: "Nieve",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/50000_snow_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/50000_snow_large.png?raw=true",
  },
  8000: {
    desc: "Tormenta Eléctrica",
    iconDay:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/80000_tstorm_large.png?raw=true",
    iconNight:
      "https://github.com/Tomorrow-IO-API/tomorrow-weather-codes/blob/master/V2_icons/large/png/80000_tstorm_large.png?raw=true",
  },
};
 
///////////////////////// CONSUMO DE LA API /////////////////////////////

// Función para mostrar el clima en tiempo real
function climaAhora(response) {
   // Obtener el primer item del array
   const firstForecast = response.hourlyForecast[0];

   if (!firstForecast) {
       console.error("No forecast data available.");
       return;
   }

   // Extraer información relevante
   const { time, temperature, weatherCode, precipitationProbability, humidity } = firstForecast;
   const date = new Date(time);
   const hour = date.getUTCHours();

   // Determinar si es día o noche
   const isDay = hour >= 6 && hour < 19; // 6 AM to 6:59 PM -> Day, else Night

   // Obtener el ícono y la descripción
   const weatherData = weatherCodes[weatherCode] || { desc: "Desconocido", iconDay: "", iconNight: "" };
   const weatherIcon = isDay ? weatherData.iconDay : weatherData.iconNight;

   // Actualizar Interfaz
   document.getElementById("now-icon").src = weatherIcon;
   document.getElementById("now-description").textContent = weatherData.desc;
   document.getElementById("now-temperature").textContent = `${temperature}°C`;
   document.getElementById("now-precipitation").textContent = `${Math.round(precipitationProbability)}%`;
   document.getElementById("now-humidity").textContent = `${Math.round(humidity)}%`;
}

// Función para mostrar el clima a lo largo del día (por horas)
function forecastDia(response) {
    const forecastData = response.hourlyForecast;

    // Seleccionar los containers 
    const mobileContainer = document.getElementById("mobile-forecast");
    const desktopContainer = document.getElementById("desktop-forecast");

    // Iterar sobre la respuesta de la api y crear los items dentro de los contenedores
    forecastData.forEach(forecast => {
        // Extraer información relevante
        const { time, temperature, weatherCode } = forecast;

        // Convertir el tiempo a formato AM/PM (e.j., 3 PM)
        const date = new Date(time);
        const hours = date.getUTCHours();
        console.log(hours)
        const formattedTime = `${hours % 12 || 12} ${hours >= 12 ? "PM" : "AM"}`;

        // Seleccionar el ícono y la descripción dependiendo de la hora
        const isDayTime = hours >= 6 && hours <= 18; // 6 AM - 6 PM
        const weatherIcon = isDayTime ? weatherCodes[weatherCode].iconDay : weatherCodes[weatherCode].iconNight;
        const weatherDescription = weatherCodes[weatherCode]?.desc || "Desconocido";

        // Crear item para la versión móvil
        const mobileItem = document.createElement("div");
        mobileItem.className = "mobile-item group relative cursor-pointer rounded-xl p-8 space-y-3 flex-shrink-0";
        mobileItem.innerHTML = `
            <img src="${weatherIcon}" class="w-7 mobile-forecast-icon" />
            <span class="font-hanken font-semibold text-grayBg mobile-forecast-time">${formattedTime}</span>
            <div class="absolute left-[1px] top-[68px] z-9 w-fit bg-white shadow-xs rounded-sm p-3 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-sm font-semibold text-grayTitle mobile-forecast-temp">${temperature}°C</p>
                <p class="text-xs text-grayTitle mobile-forecast-desc">${weatherDescription}</p>
            </div>
        `;
        mobileContainer.appendChild(mobileItem);

        // Crear item para la versión desktop
        const desktopItem = document.createElement("div");
        desktopItem.className = "desktop-item flex border-b border-b-lightGreen py-6 justify-between items-center";
        desktopItem.innerHTML = `
            <div class="flex items-center gap-x-2">
                <img src="${weatherIcon}" class="w-7 desktop-forecast-icon" />
                <span class="font-hanken font-semibold text-grayBg desktop-forecast-time">${formattedTime}</span>
            </div>
            <span class="font-hanken text-grayBg desktop-forecast-desc">${weatherDescription}</span>
            <span class="font-hanken text-grayBg desktop-forecast-temp">${temperature}°C</span>
        `;
        desktopContainer.appendChild(desktopItem);
    });
}

// Función para obtener la información de la api (Tomorrow.io)
async function fetchClimaData() {
  /* 
    - Esta parte de la función es para leer los datos desde el caché.
    - Solo se hace una solicitud a la api si la última fue hace más de 1 hora. 
    - La disponibilidad de actualizar el caché (hacer una llamada a la api) se renueva cada hora.
    - La información se almacena en el caché del usuario. 25 usuarios por hora pueden ver el clima. 
  */

  const cacheKey = "weatherData";
  const cachedData = JSON.parse(localStorage.getItem(cacheKey));

  // Obtener la hora actual en UTC redondeada a la última hora exacta
  const now = new Date();
  now.setUTCMinutes(0, 0, 0); // Redondear a la hora exacta (ej. 4:00 PM UTC)

  const lastUpdate = cachedData ? new Date(cachedData.timestamp) : null;

  // Verificar si hay datos en caché y si aún son de la hora actual exacta
  if (cachedData && lastUpdate && lastUpdate.getTime() >= now.getTime()) {
      forecastDia(cachedData.data);
      climaAhora(cachedData.data);
      return;
  }

  /* 
    Esta parte de la función es para obtener los datos directamente
    desde la api, en caso de que el caché del usuario esté vacío
    o deba de ser renovado por el paso de 1 hora.
  */

  const options = {
      method: 'POST',
      headers: {
        accept: 'application/json',
        'Accept-Encoding': 'deflate, gzip, br',
        'content-type': 'application/json'
      },
      body: JSON.stringify({
        location: '18.483402, -69.929611',
        fields: ['temperature', 'weatherCode', 'humidity', 'precipitationProbability'],
        units: 'metric',
        timesteps: ['1h'],
        startTime: 'nowMinus4h',
        endTime: 'nowPlus6h',
        dailyStartHour: 6
      })
  };    

  const apiUrl = `https://api.tomorrow.io/v4/timelines?apikey=${key}`;

  try {
      const response = await fetch(apiUrl, options);
      const data = await response.json();

      // Formatear los datos para que coincidan con la estructura esperada
      const formattedResponse = {
          hourlyForecast: data.data.timelines[0].intervals.map(interval => ({
              time: interval.startTime,
              temperature: interval.values.temperature,
              weatherCode: interval.values.weatherCode,
              humidity: interval.values.humidity,
              precipitationProbability: interval.values.precipitationProbability
          }))
      };

      // Guardar en localStorage con la hora exacta redondeada
      localStorage.setItem(cacheKey, JSON.stringify({ data: formattedResponse, timestamp: now.getTime() }));

      // Actualizar la interfaz con los nuevos datos
      forecastDia(formattedResponse);
      climaAhora(formattedResponse);
  } catch (error) {
      console.error("Error fetching weather data:", error);
  }
}

// Ejecutar la función
fetchClimaData();

// Pronóstico de los próximos 6 días (Widget de Tomorrow.io)
(function (d, s, id) {
  if (d.getElementById(id)) {
    if (window.__TOMORROW__) {
      window.__TOMORROW__.renderWidget();
    }
    return;
  }
  const fjs = d.getElementsByTagName(s)[0];
  const js = d.createElement(s);
  js.id = id;
  js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

  fjs.parentNode.insertBefore(js, fjs);
})(document, "script", "tomorrow-sdk");