      // Toggle Dropdown Menu
      function toggleDropdown() {
        const dropdown = document.getElementById("dropdownMenu");
        dropdown.classList.toggle("show");
      }

      // Toggle Favorite Jobs List
      function toggleFavJobs() {
        const favJobs = document.getElementById("favoriteJobs");
        favJobs.classList.toggle("show");
      }

      // Close dropdown when clicking outside
      window.onclick = function (event) {
        const dropdown = document.getElementById("dropdownMenu");
        if (!event.target.matches(".menu-btn")) {
          if (dropdown.classList.contains("show")) {
            dropdown.classList.remove("show");
          }
        }
      };