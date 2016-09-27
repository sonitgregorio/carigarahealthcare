<div class="navbar-fixed-bottom" style="height: 30px; background-color: #4c4c4c;color:white">
    <center style="margin-top: 8px">© 2017. All rights reserved</center>
</div>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#add_branch').click(function () {
            $('.show_modal').modal('show');
        });

        $('.edit_user').click(function () {
            x = $(this).data('param');
            $.post('/user/get_data', {data: x}, function (response) {
                users = JSON.parse(response);
                $('input[name=firstname]').val(users.firstname);
                $('input[name=lastname]').val(users.lastname);
                $('input[name=address]').val(users.address);
                $('input[name=contact]').val(users.contact);
                $('input[name=position]').val(users.description);
                $('input[name=emailadd]').val(users.email_address);
                $('input[name=uid]').val(users.id);
                $('input[name=username]').val(users.username);
                $('input[name=password]').val(users.password);
                $('input[name=cpassword]').val(users.password);

            });
        });

        $('.consult_user').click(function (){

            var data = $(this).data('param');

            $.post('/consult/get_conrecord', {data: data}, function (response){
               var result = JSON.parse(response);
                $('textarea[name=symptomss]').val(result.symptoms);
                $('input[name=findings]').val(result.findings);
                $('input[name=cid]').val(result.id);
                $('input[name=pid]').val(result.pid);
                $('#consult').modal('show');
            });

        });

        $('.dob').change(function(){
            var age = getAge(new Date($(".dob").val()));
            $('input[name=age]').val(age);
            $('input[name=ages]').val(age);
        });

        $('#medic').submit(function(e){
            var x ='';
            var medicine = $('input[name=medname]').val();
            var amount = $('input[name=amount]').val();
            var qty = $('input[name=qty]').val();
            $.post('/medicine/save_med', {med: medicine, amount: amount, qty: qty}, function (response){
                if (response === ''){
                    window.location = '/inventory'
                }else{
                    $('.hd').hide();
                    $('#medMessage').append('<div class="alert alert-danger">'+response+'</div>');
                }
            });
            e.preventDefault();

            return x;
        });

        $('#med_change').change(function(){
           var id = $('#med_change').val();
           $.post('/medicine/get_med_id', {id: id}, function(response){
             var result = JSON.parse(response)
             $('input[name=preprice]').val(result.price);
             $('input[name=remaining_qty]').val(result.qty);
           })
        });

        $('input[name=preqty]').change(function (){
           var rem = Number($('input[name=remaining_qty]').val());
           var qty = Number($('input[name=preqty]').val());
            if (rem < qty)
            {
                $('.add_pre').prop('disabled', true)
                alert('Low Stock, Remaining stock is : ' + rem );
            }else{
                $('.add_pre').prop('disabled', false)
            }
        });

    });
    function getAge(birthDate) {
        var now = new Date();

        function isLeap(year) {
            return year % 4 == 0 && (year % 100 != 0 || year % 400 == 0);
        }

        // days since the birthdate
        var days = Math.floor((now.getTime() - birthDate.getTime())/1000/60/60/24);
        var age = 0;
        // iterate the years
        for (var y = birthDate.getFullYear(); y <= now.getFullYear(); y++){
            var daysInYear = isLeap(y) ? 366 : 365;
            if (days >= daysInYear){
                days -= daysInYear;
                age++;
                // increment the age only if there are available enough days for the year.
            }
        }
        return age;
    }
</script>
</body>

