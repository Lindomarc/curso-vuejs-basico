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
        {{ age }}
        <button @click="age++">Aumentar</button>
        <button @click="age--">Diminuir</button>

        <div v-if="age >= 18">
            maior de idade
        </div>
        <div v-else>
            menor de idade
        </div>
        <div v-else>

        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js'></script>
    <script>
        const app = new Vue({
            el:'#app',
            data:{
                age:0
            },
            methods:{  
            }
        });
    </script>
</body>
</html>