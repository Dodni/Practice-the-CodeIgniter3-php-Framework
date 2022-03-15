

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            <?php if($this->session->flashdata('status')) :  ?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('status') ?>
                            </div>
                            <?php endif;  ?>
                            <h5>
                                How to fetch Employee table data from database in codeigniter 
                                <a href="<?php echo base_url('employee/add'); ?>" class ="btn btn-primary float-end">Add Employee</a>
                            </h5>
                            <br/>
                            <h5>
                                <a href="<?php echo base_url('user/add'); ?>" class ="btn btn-primary float-end">Register User</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone Nu.</th>
                                        <th>Email ID</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Confirm Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                       foreach ($employee as $row) : ?>
                                    <tr>
                                        <td><?= $row->id;?></td>
                                        <td><?= $row->first_name;?></td>
                                        <td><?= $row->last_name;?></td>
                                        <td><?= $row->phone;?></td>
                                        <td><?= $row->email;?></td>
                                        <td>
                                            <a href="<?=base_url('employee/edit/'.$row->id)?>" class="btn btn-success btm-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href="<?=base_url('employee/delete/'.$row->id)?>" class="btn btn-danger btm-sm">Delete</a>
                                        </td>
                                        <td>
                                            <button type="button" value="<?= $row->id;?>" class="btn btn-danger confirm-delete">Confirm Delete</button>
                                        </td>
                                    </tr>
                                    <?php   endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
