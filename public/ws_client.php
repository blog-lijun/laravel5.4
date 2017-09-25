<html>
    <head>
        <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
        <script src="https://cdn.bootcss.com/vue/2.4.2/vue.js"></script>
    </head>
    <body>
        <div id="app1">
            <input type="text" v-model="content" @change="change" />
            <button onclick="websocketSend(11111111)">点击发送11111</button>
        </div><br/>
        <span>测试websocket</span>


        <script>
            var wsServer = 'ws://123.57.244.104:9503';
            var websocket = new WebSocket(wsServer);
            websocket.onopen = function (evt) {
                console.log("Connected to WebSocket server.");
            };
            websocket.onmessage = function (evt) {
                console.log('Retrieved data from server: ' + evt.data);
            };
            websocket.onclose = function (evt) {
                console.log("Disconnected");
            };

            websocket.onerror = function (evt, e) {
                console.log('Error occured: ' + evt.data);
            };

            var app1 = new Vue({
                el:'#app1',
                data:{
                    content:'websocket 发送内容',
                },
                methods:{
                    change:function(){
                       console.log(this.content);
                        websocketSend(this.content);
                    }
                }
            });

            function websocketSend(content){ //方法内只进行发送不然会一直发送
                websocket.send(content);
            }



        </script>
    </body>
</html>