document.addEventListener("DOMContentLoaded", () => {
    let now = new Date();
    let currentHour24 = now.getHours(); // Get 24-hour format hour
    let currentMinute = now.getMinutes(); // Get current minute to check for exact match

    const items = document.querySelectorAll("#programa-hoy ul li");
    let lastProgram = null;
    let nextProgram = null;
    let lastScheduledHour = -1; // Track closest past program time

    items.forEach((item, index) => {
        let timeSpan = item.querySelector("span").textContent.trim();
        let programText = item.querySelector("p");
        let icon = item.querySelector("i");

        let startTime = timeSpan.split(" - ")[0]; // Get start time
        let endTime = timeSpan.split(" - ")[1] ? timeSpan.split(" - ")[1] : startTime; // Get end time (if any)

        // Function to convert time string (e.g., "7:00 AM") to 24-hour format
        const convertTo24Hour = (timeStr) => {
            let [time, period] = timeStr.split(" ");
            let [hours, minutes] = time.split(":").map(Number);
            if (period === "PM" && hours !== 12) {
                hours += 12;
            } else if (period === "AM" && hours === 12) {
                hours = 0;
            }
            return { hours, minutes };
        };

        let start24 = convertTo24Hour(startTime);
        let end24 = convertTo24Hour(endTime);

        // Determine "Now", "Earlier", or "Later"
        if (currentHour24 >= start24.hours && currentHour24 < end24.hours) {
            // Current program → "Now"
            item.classList.add("gap-x-3", "bg-lightGreen");
            icon.classList.add("bxs-circle", "text-green-600");
            programText.classList.add("text-green-600");
        } else if (start24.hours < currentHour24 || (start24.hours === currentHour24 && start24.minutes <= currentMinute)) {
            // Past program → "Earlier"
            item.classList.add("gap-x-3", "bg-gray-100");
            icon.classList.add("bxs-circle", "text-gray-200");
            programText.classList.add("text-gray-400");

            // Update lastProgram only if it's closer to the current time
            if (start24.hours > lastScheduledHour) {
                lastScheduledHour = start24.hours;
                lastProgram = item;
            }
        } else {
            // Future program → "Later"
            item.classList.add("gap-x-3", "bg-gray-200");
            icon.classList.add("bx-circle", "text-gray-300");
            programText.classList.add("text-gray-600");

            if (!nextProgram) {
                nextProgram = item; // Store first future program
            }
        }
    });

    // If no exact match and between two programs, highlight the closest past program as "Now"
    if (!document.querySelector(".bg-lightGreen") && lastProgram) {
        lastProgram.classList.add("gap-x-3", "bg-lightGreen");
        lastProgram.querySelector("i").classList.add("bxs-circle", "text-green-600");
        lastProgram.querySelector("p").classList.add("text-green-600");
    }
});
