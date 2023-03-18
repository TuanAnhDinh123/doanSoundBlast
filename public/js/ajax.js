heartIcon = [`<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"
                viewBox="0 0 16 16">
                <path
                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
            </svg>`,
            `<svg color="red" xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor"
                class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
            </svg>`]
var likeContainer = document.getElementsByClassName("likeIconContainer");
for (i=0; i<likeContainer.length; i++) {
    likeContainer[i].addEventListener('click',function(){
        var songID = this.querySelector(".likeIcon-songID");
        var likeStatus = this.querySelector(".iconStatus");
        var numberOfLike = this.querySelector(".numberOfLike");
        var songIcon = this.querySelector(".likeIconClass");
        let number = numberOfLike.innerHTML;
        if (likeStatus.innerHTML == 0) {
            likeStatus.innerHTML = 1;
            number++;
            songIcon.innerHTML = heartIcon[1];
            numberOfLike.innerHTML = number;
        } else{
            likeStatus.innerHTML = 0;
            number--;
            songIcon.innerHTML = heartIcon[0];
            numberOfLike.innerHTML = number;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.status=200 && this.readyState == 4){
                    
            }
        }
        xmlhttp.open("GET","like/"+songID.innerHTML+"/"+number,true);
        xmlhttp.send();//thuoc tinh readystate bat dau thay doi tu 0 thoi 4=>su kien onreadystatechange se thay doi
    })
}
//Handle Sidebar Tag
var UrlArr = [
    'http://localhost:8000/ca-nhan',
    'http://localhost:8000/trending',
    'http://localhost:8000/chart',
    'http://localhost:8000/nhac-moi',
    'http://localhost:8000/the-loai',
    'http://localhost:8000/top-nghe-si',
    'http://localhost:8000/top-search'    
]
var pageURL = window.location.href;
var sidebarTag = document.getElementsByClassName("sidebar-tag");
for (i=0; i<sidebarTag.length; i++) {
    console.log(sidebarTag[i]);
    if (pageURL == UrlArr[i]){
        console.log(i)
        sidebarTag[i].classList.add("sidebar-tag-active");
    }
}


//Handle Tooltip
    // $(document).ready(function(){
    // $('[data-toggle="tooltip"]').tooltip();   
    // });
// Initialize tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})