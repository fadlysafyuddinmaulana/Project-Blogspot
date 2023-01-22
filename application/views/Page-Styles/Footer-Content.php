<footer class="text-muted py-5">
   <div class="container">
      <p class="float-end mb-1">
         <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
   </div>
</footer>


<script src="<?= base_url() ?>assets/bootstrap-5.3.0-alpha1-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
<script>
   const navEL = document.querySelector('.navbar');
   window.addEventListener('scroll', () => {
      if (window.scrollY >= 56) {
         navEL.classList.add('navbar-scrolled');
      } else if (window.scrollY < 56) {
         navEL.classList.remove('navbar-scrolled');
      }
   });
</script>

</body>

</html>