<?php

$config = [

             
              'admin_login' => [  
                                         [
                                            'field' => 'username',
                                            'label' => 'Username',
                                            'rules' => 'required|max_length[50]'
                                         ],
                                         
                                         [

                                             'field' => 'password',
                                             'label' => 'Password',
                                             'rules' => 'required'
                                         ] 
                                  ],

               'stud_login' => [  
                                         [
                                            'field' => 'username',
                                            'label' => 'Username',
                                            'rules' => 'required'
                                         ],
                                         
                                         [

                                             'field' => 'password',
                                             'label' => 'Password',
                                             'rules' => 'required'
                                         ] 
                                  ],

                'stud_register' => [  
                                         [
                                            'field' => 'username',
                                            'label' => 'Username',
                                            'rules' => 'required|numeric'
                                         ],
                                         
                                         [

                                             'field' => 'password',
                                             'label' => 'Password',
                                             'rules' => 'required'
                                         ] 
                                  ]                                                                                  
           ];                      











                                  





















