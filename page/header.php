<style>
    .fixe{
        position:sticky;
         top: 0px;
         background-color:white;
         z-index: 3;
   }
    .tete{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between; 
}
    .tete1{
    margin-left: 50px;

}
.liennav{
    text-decoration: none;
    font: 18px comic sans ms black;
}
.shearch{
    margin-top: 15px;
}
.imgtitre{
    width: 100px;
}
.search0{
    display: block;
    position: absolute;
    width: 50px;
    margin-left:-40px; 
    z-index: 2;
    
}
.button{
    border-radius: 50px;
    padding: 10px;
    background:rgba(49, 107, 207, 0.7);
    font-size: 14px;
    font-family: cursive;
    text-decoration: none;
    color: black;
}

</style>
<header class="fixe">
    <div class="tete">
        <div class="titre">
            <img  class="imgtitre" src="img\titre\1.png">
        </div>
        <nav>
            <a  class="liennav" href="../../index.php">Acceuil</a>
        </nav>
    <div class="tete1">
        <label for="chercher">
            <button class="search0">
        <img class="search0" src="img\titre\shear.png">
        </button>
        <input type="search" id="chercher" class="shearch">
           </label> 
            <a class="button" href="../login.php">Se connecter</a>
        
        </div>
        </div>
</header>