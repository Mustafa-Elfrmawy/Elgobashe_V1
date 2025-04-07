3
</body>
</html>


  3
  3  3  

3




3

3
  3
    




3
3
  3333



   3
  3
    3  3  3  3
    
<script src="./assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/waves.js"></script>
<script src="js/sidebarmenu.js"></script>
<script src="js/custom.js"></script>
<script src="js/edites.js"></script>
<script src="js/tables.js"></script>
<script src="./assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="js/app-style-switcher.js"></script>
    <script>
        $(document).ready(function(){
            $.get('/api/orders', function(data) {
                var tbodyHtml = '';
                if(data.length === 0){
                    tbodyHtml = '<tr><td colspan="4">لا توجد بيانات</td></tr>';
                } else {
                    data.forEach(function(item){
                        tbodyHtml += '<tr>' +
                        '<td>' + item.id + '</td>' +
                        '<td>' + item.order_code + '</td>' +
                        '<td>' + item.gloss + '</td>' +
                        '<td>' + item.date + '</td>' +
                        '</tr>';
                    });
                }
                $('#orders-table tbody').html(tbodyHtml);
            });
        });
        </script>

        <script>
            $(".preloader").fadeOut();
        </script>
</body>
</html>



