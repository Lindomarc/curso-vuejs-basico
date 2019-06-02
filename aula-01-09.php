<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'/>
    <title>Document</title>
</head>
<body>
    <div id="app" class="container">
        <form @submit.prevent="cadastro" action="teste/">
            <input type="text">
            <select @change="select">
                <option value="">option 1</option>
                <option value="">option 2</option>
            </select>
            <input type="radio" name="radio" @click="radio">
            <input type="radio" name="radio" @click="radio">

            <input type="checkbox" @click="check"> opcão check
            <input type="checkbox" @click="change"> opção change
            <button type="submit">cadastrar</button>
        </form>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js'></script>
    <script>

        const app = new Vue({
            el:'#app',
            data:{
                busca:''
            },
            methods:{
                cadastro(){
                    console.log('cadastro');
                },

                select(){
                    console.log('select');
                }, 
                radio(){
                    console.log('radio');
                }, 
                check(){
                    console.log('check');
                },
                change(){
                    console.log('change');
                }
            } 
                
        });

    </script>
</body>
</html>