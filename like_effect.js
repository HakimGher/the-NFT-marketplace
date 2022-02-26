var elm = document.getElementsByClassName("fa-regular");
                   
                    
                     for(var i=0;i<elm.length;i++){
                        elm[i].addEventListener("click",function(){
                            if(this.className === 'fa-regular fa-heart'){
                                this.classList.remove('fa-regular','fa-heart');
                                this.classList.toggle('fa-solid');
                                this.classList.toggle('fa-heart');
                             
                                
                            } 
                            else{
                                this.classList.remove('fa-solid','fa-heart');
                                this.classList.toggle('fa-regular');
                                this.classList.toggle('fa-heart');
                                
                                
                            }
                        

                        });
                        

                    }
               