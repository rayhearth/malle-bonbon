<!-- ------------------ JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            const accordeon = document.getElementsByClassName('contentBx');
            for (i =0; i<accordeon.length; i++){
                accordeon[i].addEventListener('click', function(){
                    this.classList.toggle('active')
                })
            }
        </script>