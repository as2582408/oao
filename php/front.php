<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <meta charset="utf-8">
    <form name='form' id='form'>
        <input type='number' name='name' id='number' />
        <input type='button' name='submit' id='button' value="確認 " /> 
        <input type='button' name='submit' id='poi' value="顯示答案" /> 

    </form>
<p id="p1"></p>
<script type="text/javascript">
    $(document).ready(function(){
        $("#button").click(function() {
            var data = document.getElementById("number").value;
        $.ajax({
            url: "back.php",
            type: "POST",
            dataType: "text",
            cache: false,
            data: {
                number:data
            },
            success: function(response) {
                document.getElementById("p1").innerHTML = response;
            },
            error: function(){
                console.log('哪裡怪怪的');
        	    } 
            });
        });

        $("#poi").click(function() {
        $.ajax({
            url: "back.php",
            type: "POST",
            dataType: "text",
            cache: false,
            data: {
                poi:true
            },
            success: function(response) {
                document.getElementById("p1").innerHTML = response;
            },
            error: function(){
                console.log('哪裡怪怪的');
        	    } 
            });
        });
    });
</script>
