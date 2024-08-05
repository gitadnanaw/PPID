document.addEventListener("DOMContentLoaded", function () {
  const tableHeaders = document.querySelectorAll(".table th");
  let currentSortOrder = ""; // Track current sort order

  tableHeaders.forEach((header) => {
    header.addEventListener("click", (event) => {
      const table = header.closest(".table");
      const tbody = table.querySelector("tbody");

      // Check if the click occurred on the thead
      if (event.target.closest("thead")) {
        const rows = Array.from(tbody.querySelectorAll("tr"));
        const columnIndex = Array.from(header.parentNode.children).indexOf(
          header
        );

        // Determine sort order
        if (currentSortOrder === "asc" || currentSortOrder === "") {
          currentSortOrder = "desc";
        } else {
          currentSortOrder = "asc";
        }

        // Remove sorting indicator from all headers
        tableHeaders.forEach((th) => {
          th.classList.remove("asc", "desc");
        });

        // Add sorting indicator to the clicked header
        header.classList.add(currentSortOrder);

        // Sort rows based on the content of the clicked column
        rows.sort((rowA, rowB) => {
          const valueA = rowA.cells[columnIndex].textContent.trim();
          const valueB = rowB.cells[columnIndex].textContent.trim();

          if (isNaN(valueA) || isNaN(valueB)) {
            return currentSortOrder === "asc"
              ? valueA.localeCompare(valueB)
              : valueB.localeCompare(valueA);
          } else {
            return currentSortOrder === "asc"
              ? parseFloat(valueA) - parseFloat(valueB)
              : parseFloat(valueB) - parseFloat(valueA);
          }
        });

        // Reorder the rows in the tbody
        tbody.innerHTML = "";
        rows.forEach((row) => tbody.appendChild(row));
      }
    });
  });
});

/*TABEL INFORMASI PUBLIK*/
document.addEventListener("DOMContentLoaded", function () {
  const tableIPHeaders = document.querySelectorAll(".tableIP th");
  let currentSortOrder = ""; // Track current sort order

  tableIPHeaders.forEach((header) => {
    header.addEventListener("click", (event) => {
      const tableIP = header.closest(".tableIP");
      const tbody = tableIP.querySelector("tbody");

      // Check if the click occurred on the thead
      if (event.target.closest("thead")) {
        const rows = Array.from(tbody.querySelectorAll("tr"));
        const columnIndex = Array.from(header.parentNode.children).indexOf(
          header
        );

        // Determine sort order
        if (currentSortOrder === "asc" || currentSortOrder === "") {
          currentSortOrder = "desc";
        } else {
          currentSortOrder = "asc";
        }

        // Remove sorting indicator from all headers
        tableIPHeaders.forEach((th) => {
          th.classList.remove("asc", "desc");
        });

        // Add sorting indicator to the clicked header
        header.classList.add(currentSortOrder);

        // Sort rows based on the content of the clicked column
        rows.sort((rowA, rowB) => {
          const valueA = rowA.cells[columnIndex].textContent.trim();
          const valueB = rowB.cells[columnIndex].textContent.trim();

          if (isNaN(valueA) || isNaN(valueB)) {
            return currentSortOrder === "asc"
              ? valueA.localeCompare(valueB)
              : valueB.localeCompare(valueA);
          } else {
            return currentSortOrder === "asc"
              ? parseFloat(valueA) - parseFloat(valueB)
              : parseFloat(valueB) - parseFloat(valueA);
          }
        });

        // Reorder the rows in the tbody
        tbody.innerHTML = "";
        rows.forEach((row) => tbody.appendChild(row));
      }
    });
  });
});
