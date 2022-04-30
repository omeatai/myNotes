function getMyDiocese()
        {
            var x = document.getElementById("province").value;

                    document.getElementById('DIV_EXAMPLE').style.display = 'none';
                    document.getElementById('EXAMPLE').disabled = true;
                    document.getElementById('DIV_INSTITUTION').style.display = 'none';
                    document.getElementById('INSTITUTION').disabled = true;
                    document.getElementById('DIV_LAGOS').style.display = 'none';
                    document.getElementById('LAGOS').disabled = true;
                    document.getElementById('DIV_OFTHENIGER').style.display = 'none';
                    document.getElementById('OFTHENIGER').disabled = true;
                    document.getElementById('DIV_NIGERDELTA').style.display = 'none';
                    document.getElementById('NIGERDELTA').disabled = true;
                    document.getElementById('DIV_IBADAN').style.display = 'none';
                    document.getElementById('IBADAN').disabled = true;
                    document.getElementById('DIV_ONDO').style.display = 'none';
                    document.getElementById('ONDO').disabled = true;
                    document.getElementById('DIV_KADUNA').style.display = 'none';
                    document.getElementById('KADUNA').disabled = true;
                    document.getElementById('DIV_OWERRI').style.display = 'none';
                    document.getElementById('OWERRI').disabled = true;
                    document.getElementById('DIV_BENDEL').style.display = 'none';
                    document.getElementById('BENDEL').disabled = true;
                    document.getElementById('DIV_ENUGU').style.display = 'none';
                    document.getElementById('ENUGU').disabled = true;
                    document.getElementById('DIV_ABA').style.display = 'none';
                    document.getElementById('ABA').disabled = true;
                    document.getElementById('DIV_KWARA').style.display = 'none';
                    document.getElementById('KWARA').disabled = true;
                    document.getElementById('DIV_JOS').style.display = 'none';
                    document.getElementById('JOS').disabled = true;
                    document.getElementById('DIV_ABUJA').style.display = 'none';
                    document.getElementById('ABUJA').disabled = true;
                    document.getElementById('DIV_LOKOJA').style.display = 'none';
                    document.getElementById('LOKOJA').disabled = true;
                    document.getElementById('DIV_CANA').style.display = 'none';
                    document.getElementById('CANA').disabled = true;


            switch (x){
                case 'INSTITUTION':
                    document.getElementById('DIV_INSTITUTION').style.display = 'block';
                    document.getElementById('INSTITUTION').disabled = false;
                    break;
                case 'LAGOS':
                    document.getElementById('DIV_LAGOS').style.display = 'block';
                    document.getElementById('LAGOS').disabled = false;
                    break;
                case 'OFTHENIGER':
                    document.getElementById('DIV_OFTHENIGER').style.display = 'block';
                    document.getElementById('OFTHENIGER').disabled = false;
                    break;
                case 'NIGERDELTA':
                    document.getElementById('DIV_NIGERDELTA').style.display = 'block';
                    document.getElementById('NIGERDELTA').disabled = false;
                    break;
                case 'IBADAN':
                    document.getElementById('DIV_IBADAN').style.display = 'block';
                    document.getElementById('IBADAN').disabled = false;
                    break;
                case 'ONDO':
                    document.getElementById('DIV_ONDO').style.display = 'block';
                    document.getElementById('ONDO').disabled = false;
                    break;
                case 'KADUNA':
                    document.getElementById('DIV_KADUNA').style.display = 'block';
                    document.getElementById('KADUNA').disabled = false;
                    break;
                case 'OWERRI':
                    document.getElementById('DIV_OWERRI').style.display = 'block';
                    document.getElementById('OWERRI').disabled = false;
                    break;
                case 'BENDEL':
                    document.getElementById('DIV_BENDEL').style.display = 'block';
                    document.getElementById('BENDEL').disabled = false;
                    break;
                case 'ENUGU':
                    document.getElementById('DIV_ENUGU').style.display = 'block';
                    document.getElementById('ENUGU').disabled = false;
                    break;
                case 'ABA':
                    document.getElementById('DIV_ABA').style.display = 'block';
                    document.getElementById('ABA').disabled = false;
                    break;
                case 'KWARA':
                    document.getElementById('DIV_KWARA').style.display = 'block';
                    document.getElementById('KWARA').disabled = false;
                    break;
                case 'JOS':
                    document.getElementById('DIV_JOS').style.display = 'block';
                    document.getElementById('JOS').disabled = false;
                    break;
                case 'ABUJA':
                    document.getElementById('DIV_ABUJA').style.display = 'block';
                    document.getElementById('ABUJA').disabled = false;
                    break;
                case 'LOKOJA':
                    document.getElementById('DIV_LOKOJA').style.display = 'block';
                    document.getElementById('LOKOJA').disabled = false;
                    break;
                case 'CANA':
                    document.getElementById('DIV_CANA').style.display = 'block';;
                    document.getElementById('CANA').disabled = false;
                    break;
            }


        }




    function getMyChurch(sel)
    {
        var dValue = sel.options[sel.selectedIndex].value;

        switch (dValue){
            case 'ABUJA':
                document.getElementById('DIV_ABUJA_CHURCH').style.display = 'block';
                document.getElementById('ABUJA_CHURCH').disabled = false;
                break;
            default:
                document.getElementById('DIV_ABUJA_CHURCH').style.display = 'none';
                document.getElementById('ABUJA_CHURCH').disabled = true;
                break;
        }


    }
