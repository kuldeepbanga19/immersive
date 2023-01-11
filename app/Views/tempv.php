<h2>testview</h2>
<script>
    // var conn = new WebSocket('wss://68.178.167.173');
     var conn = new WebSocket('ws://yatharthritiitschool.com:8282');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
};

</script>   
