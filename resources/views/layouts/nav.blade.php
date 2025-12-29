

<style>
.menu{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background-color:green;
    height:10vh;

}
.menu ul{
    display:flex;

}
.menu ul li{
    padding:12px;
    color:white;
}
</style>
<div class="menu">
<img src="" alt="">
<ul>
    <li><a href="{{ route('categorie.index') }}">accueil</a></li>
    <li><a href="{{ route('produit.index') }}">produit</a></li>
    <li><a href="">vendeur</a></li>
</ul>
</div>
