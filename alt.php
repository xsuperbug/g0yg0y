
    </div>
    <!-- /1 -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">


	$("#form").submit(function () {


	function IsMatch(oh) {
		return /[^a-zA-Z 0-9]+/g.test(oh);
	}

	if(IsMatch($("#kadi").val())) { alert('Hacker attempted'); return false; }


	});	

    </script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>