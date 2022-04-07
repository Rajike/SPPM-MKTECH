window.onload=function(){

    console.log('js is workng')
    const print = document.getElementById('size');
    
    var price = 0;

    const cost = document.getElementById('price');

    const frame = document.getElementById('frame');


    function getPrint(){
      
        if (print.value == '4x6'){
            price = 40;
            if (frame.value == 'black'|| frame.value == 'brown' || frame.value == 'white'){
                price = price+200;
            } else if (frame.value == 'borderless'){
                price = price+240;
            }

        } else if (print.value == '5x7'){
            price = 80;
            if (frame.value == 'black'|| frame.value == 'brown' || frame.value == 'white'){
                price = price+300;
            } else if (frame.value == 'borderless'){
                price = price+340;
            }

        } else if (print.value == '8x10'){
            price = 120;
            if (frame.value == 'black'|| frame.value == 'brown' || frame.value == 'white'){
                price = price+400;
            } else if (frame.value == 'borderless'){
                price = price+440;
            }

        } else if (print.value == '8.5x11'){
            price = 180;
            if (frame.value == 'black'|| frame.value == 'brown' || frame.value == 'white'){
                price = price+500;
            } else if (frame.value == 'borderless'){
                price = price+540;
            }

        } else if (print.value == '12x18'){
            price = 210;
            if (frame.value == 'black'|| frame.value == 'brown' || frame.value == 'white'){
                price = price+600;
            } else if (frame.value == 'borderless'){
                price = price+640;
            }

        } else if (print.value == '18x24'){
            price = 320;
            if (frame.value == 'black'|| frame.value == 'brown' || frame.value == 'white'){
                price = price+700;
            } else if (frame.value == 'borderless'){
                price = price+740;
            }

        } else {
            price = 380;
            if (frame.value == 'black'|| frame.value == 'brown' || frame.value == 'white'){
                price = price+800;
            } else if (frame.value == 'borderless'){
                price = price+840;
            }
        }

        cost.setAttribute("placeholder", price)
        cost.setAttribute("value", price)
    };

    print.addEventListener('change',getPrint);

    frame.addEventListener('change', getPrint);



}