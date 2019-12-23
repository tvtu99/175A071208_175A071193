//buoc1
var vanban = document.getElementById('vanban');
var btclick = document.getElementById('btclick');
var showanh = document.getElementById('showanh');
//b2
btclick.addEventListener('click', hamshow)
//b3 tao ham
function hamshow(){
    if(vanban.value == '')
    {
        alert('nhap van ban');
    }
    else
    {
        if(vanban.value == 'anh')
        {
            var bien = document.createElement('p');
            
            bien.value = "acb";
            showanh.textContent = 'anh cua ban ne';
        }
    }
    
}