# How To Install Homestead Into Your Project

1. Go to your project and open cmd
    ```php

    composer require laravel/homestead
    
    ```
1. Then type 
    ```cmd

    vendor\\bin\\homestead make 

    ```
3. Open  [HomeStead.yml](Homestead.yaml) file and change the data to your liking

4. To Generate the `ssh` key type in `Git-bash` 
    ```c
    
    ssh-keygen -t rsa -b 4096
    
    ```

5. To add Virtual Domain to your machine add `192.168.10.10 homestead.test` to host file in windows

6. Install `vagrant` then inside the project 
    ```cmd 
    
    vagrant up
    
    ```
7. To see Vagrant commands 
    ```

    vagrant
    
    ```
    vagrant-destroy  `to delete the virtual box`
    
    ```
    
    vagrant-destroy 
    
    ```
8. To log into the virtual machine type in cmd
    ```cmd 
    
    vagrant ssh
    
    ```

9. To update a project 
    ```cmd
    
    composer update

    ```