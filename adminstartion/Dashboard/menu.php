<style>
    /* #292a2b */
    .sidebar, .sidebar-content,.sidebar-link, a.sidebar-link  {
  background-color: #292a2b !important;
}


</style>

<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.php">
            <span class="align-middle"><img src="img/icons/logoy.png" width="200" height="80" alt=""></span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link " href="index.php">
                    <i class="align-middle" data-feather="home"></i> <span class="align-middle">Acceuil</span>
                </a>
            </li>

            <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link" href="Statistiques.php">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Statistiques</span>
                </a>
            </li>

            <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link" href="Produits.php">
                    <i class="align-middle" data-feather="copy"></i> <span class="align-middle">Produit</span>
                </a>
            </li>

            <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link" href="MeuilleurVente.php">
                    <i class="align-middle" data-feather="star"></i> <span class="align-middle">Meuilleur Vente</span>
                </a>
            </li>

            <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link" href="DataBase.php">
                    <i class="align-middle" data-feather="database"></i> <span class="align-middle">DataBase</span>
                </a>

            </li>
            <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link" href="Commande.php">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Commande</span>
                </a>

            </li>
            <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link" href="deconnecter.php">
                    <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Log
                        out</span>
                </a>
            </li>

        </ul>


    </div>
</nav>
<script>
    // function active(){
    //     document.getElementsByName('sidebar-item').
    // }
//     function active(elem) {
//     // get all 'a' elements
//     var a = document.getElementsByTagName('sidebar-item ');
//     // loop through all 'a' elements
//     for (i = 0; i < a.length; i++) {
//         // Remove the class 'active' if it exists
//         a[i].classList.remove('active')
//     }
//     // add 'active' classs to the element that was clicked
//     elem.classList.add('active');
// }
function active() {
    var element = document.getElementById("sidebar-item");
    element.classList.add("active");
} 
</script>