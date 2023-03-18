//Handle Sidebar Tag
var UrlArr = [
    'http://localhost:8000/admin/add-cate',
    'http://localhost:8000/admin/list-cate',
    'http://localhost:8000/admin/add-artist',
    'http://localhost:8000/admin/list-artist',
    'http://localhost:8000/admin/add-author',
    'http://localhost:8000/admin/list-author',
    'http://localhost:8000/admin/add-song',    
    'http://localhost:8000/admin/list-song',    
    'http://localhost:8000/admin/feedback',    
]
var pageURL = window.location.href;
var sidebarTag = document.getElementsByClassName("adminSidebarTag");
for (i=0; i<sidebarTag.length; i++) {
    console.log(pageURL)
    if (pageURL == UrlArr[i]){
        sidebarTag[i].classList.add("adminSidebarTag-active");
        
    }
}