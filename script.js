//counter
document.addEventListener('DOMContentLoaded', () =>{
    function counter(id1,start,end,duration,set){
        let obj = document.getElementById(id1);
        current = start,
            stop = set,
            range = end - start,
            increment = end > start ? 1 : -1,
            step = Math.abs(Math.floor(duration / range)),
            timer = setInterval(()=>{
            current += increment;
            obj.textContent = current;
            if(current == end){
                clearInterval(timer);
                stop++;
                cont = "count"+stop;
                if(stop <= 3){counter(cont,0,20,2000,stop);}
                
            }
        },step);
    }
    
   
    
    /*$.when(counter("count1",0,20,1500)).then(function(){
    counter("count2",0,20,3000);
}).then(function() {
        counter("count3",0,20,3000);
    });*/

    
   counter("count1",0,220,1500,1);
  // counter("count2",0,20,3000);
  //  counter("count3",0,20,3000);
    
});