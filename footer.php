<div class="container footer">
      <hr>
      <footer>
        <p align="center" id="para">
        <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a class="nav-link" href="hms-staff.php">Staff Login</a>
                  </li>';
                }
        ?>
        </p>
        <p align="right">
        Made and managed using by coding wolves - <?php echo date('Y'); ?>
        </nav>
		</p>
      </footer>
    </div>
  </body>
</html>
<style type="text/css">
#para
{
  font-size:30px;
  display:block;
}
</style>
