function mybtnclick()
{
    var blood = document.getElementById('blood').value;
    var country = document.getElementById('country').value;
    var state = document.getElementById('state').value;
    var district = document.getElementById('district').value;
    var city = document.getElementById('city').value;

    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onprogress= function()
    {
        var tabledata = document.getElementById('showresult');
        tabledata.innerHTML="";
        tabledata.innerHTML="<tr><th>Name</th><th>Date of Birth</th><th>Blood Group</th><th>Phone Number</th><th>Last Donated On</th></tr>";

    };
    xmlhttp.onload = function(){
        $("#showresult").load("test.php");
        
        
    };
    xmlhttp.open("GET","search.php?blood="+blood+"&country="+country+"&state="+state+"&district="+district+"&city="+city);
    xmlhttp.send();
};



