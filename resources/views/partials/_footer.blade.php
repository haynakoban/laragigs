    <!-- footer -->
    <footer class="flex justify-center items-center p-3 text-center">
      <div class="subject-data">
        <small style="color: #212121; font-weight: 500; letter-spacing: 1px"
          >© 2023 <span class="text-rose-800" style="font-weight: normal">Hired<span style="color: #273eac;">Hub</span>
            </span>
          - Tarlac, Philippines. All Rights Reserved.
        </small>
      </div>
    </footer>

    <x-flash-message />

    <!-- script -->
    <script>
        const navSlide = () => {
        const burger = document.querySelector('.burger');

        burger.addEventListener('click', () => {
            // burger menu
            burger.classList.toggle('toggle');
        });
        };

        navSlide();
    </script>
  </body>
</html>