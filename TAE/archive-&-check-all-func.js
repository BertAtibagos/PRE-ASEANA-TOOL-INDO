function DoCheckUncheckDisplay(d,dchecked,dunchecked)
{
    if( d.checked == true )
    {
       document.getElementById(dchecked).style.display = "block";
       document.getElementById(dunchecked).style.display = "none";
 
    }
    else
    {
       document.getElementById(dchecked).style.display = "none";
       document.getElementById(dunchecked).style.display = "block";
    }
}
