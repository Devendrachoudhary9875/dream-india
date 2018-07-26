
        $(document).ready(function(){
            $('#loginform').formValidation({
                framework:'bootstrap',
                icon: {
                    valid:'glyphicon glyphicon-ok',
                    invalid:'glyphicon glyphicon-remove',
                    validating:'glyphicon glyphicon-refresh'
                },
                fields: {
                    uname:{
                        validators:{
                            notEmpty:{
                                message:'Username is must for login'
                            }
                        }
                    },
                    passwd:{
                        validators:{
                            notEmpty:{
                                message:'Please Enter Password'
                            }
                        }
                    },
                    
                }
            });
        });