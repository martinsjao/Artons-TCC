
// calendario
document.addEventListener("DOMContentLoaded", function() {
    const calendarBody = document.getElementById("calendarBody");
    const currentMonthYear = document.getElementById("currentMonthYear");
    const prevMonthButton = document.getElementById("prevMonth");
    const nextMonthButton = document.getElementById("nextMonth");

    const months = [
        "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julhio", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
    ];

    let currentDate = new Date();

    function generateCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        currentMonthYear.textContent = `${months[month]} - ${year}`;

        const firstDayOfMonth = new Date(year, month, 1);
        const lastDayOfMonth = new Date(year, month + 1, 0);

        const daysInMonth = lastDayOfMonth.getDate();

        let date = 1;
        let calendarHTML = "";

        for (let i = 0; i < 6; i++) {
            calendarHTML += "<tr>";

            for (let j = 0; j < 7; j++) {
                if (i === 0 && j < firstDayOfMonth.getDay()) {
                    calendarHTML += "<td></td>";
                } else if (date > daysInMonth) {
                    calendarHTML += "<td></td>";
                } else {
                    const isCurrentDay = date === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear();
                    const tdClass = isCurrentDay ? "current-day" : "";

                    calendarHTML += `<td class="${tdClass}">${date}</td>`;
                    date++;
                }
            }

            calendarHTML += "</tr>";
        }

        calendarBody.innerHTML = calendarHTML;
    }

    generateCalendar();

    prevMonthButton.addEventListener("click", function() {
        currentDate.setMonth(currentDate.getMonth() - 1);
        generateCalendar();
    });

    nextMonthButton.addEventListener("click", function() {
        currentDate.setMonth(currentDate.getMonth() + 1);
        generateCalendar();
    });
  });

