function get(id)
    {
        return document.getElementById(id)
    }
function add()
{
var a = get("A");
var b = get("B");

a.addEventListener("input", num);
b.addEventListener("input", num);

function num()
{
    var a = parseFloat(get("A").value) || 0;
    var b = parseFloat(get("B").value) || 0;
    var c = get("C");
    c.innerHTML="Sum is"+ (a+b);
}


}
function sur_name()
{
    alert("hii");
    var s_list = get("sandhu");
    var s_name = get("sandhu_name");
   // var toor = get("toor_name");
   // var khehra = get("khehra_name");

    sandhu.addEventListener("click", function(){
        if(s_name.className==="hide")
        {
            s_name.className="";
        }
        
    });
   
}