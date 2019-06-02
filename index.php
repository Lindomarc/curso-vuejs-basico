<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css'/>
    <title>Document</title>
</head>
<body>

    <div id="app" class="container">
    https://br.vuejs.org/v2/guide/instance.html
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js'></script>

    <script>
        const app = new Vue({
            beforebeforeUpdateCreate(){
                console.log('beforeCreate');
            },
            created(){
                console.log('created');
            },
            
            el:'#app',
            
            beforeMount(){
                console.log('beforeMount');
            },
            mounted(){
                console.log('mounted');
            },
            beforeUpdate(){
                console.log('beforeUpdate');
            },
            updated(){
                console.log('updated');
            },
            beforeDestroy(){
                console.log('beforeDestroy');
            },
            destroyed(){
                console.log('destroyed');
            }


        });
    </script>
</body>
</html>