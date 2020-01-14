var menu = document.getElementById('menu');
var open = document.getElementById('open');
var close = document.getElementById('close');

if (open){
    open.addEventListener('click', showMenu())
}

if (close)
{
    close.addEventListener('click', hideMenu())
}


function showMenu() {
    menu.style.display = 'block';
    open.id="close";
}

function hideMenu() {
    menu.style.display = 'none';
    close.id="open";
}

// // function openMenu(){
//     if (open){
//         open.addEventListener('click', function(){
//             menu.style.display = 'block';
//             open.id="close";
//         });
//     };
// // };

// // function closeMenu(){
//     if (close){
//         close.addEventListener('click', function(){
//             menu.style.display = 'none';
//             open.id="open";
//         });
//     };
// // };

