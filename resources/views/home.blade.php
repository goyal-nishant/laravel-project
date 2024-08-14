<x-status class="warning" mes="This is warning" ></x-status>
<h1>Home Page</h1>
 {{$name}}
 <br><br>
 <?=$name ?>
 <br><br>
<x-status class="error" mes="This is error" ></x-status>
<br><br>
<x-status class="success" mes="This is sucess" ></x-status>

<style>
    .success {
        background-color: rgba(67, 145, 67, 0.884);
        color: green;
        padding: 10px 5px;
        display: inline;
    }

    .warning { 
        background-color: rgb(209, 209, 129);
        color: yellow
        padding: 10px 5px;
        display: inline;
    }

    .error {
        background-color: rgb(224, 139, 139);
        color: red;
        padding: 10px 5px;
        display: inline;
    }
</style>