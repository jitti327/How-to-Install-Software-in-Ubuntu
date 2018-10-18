
Some General-commands you need to Know about ubuntu:- 

1) File Permissions:- 

Ref:- https://www.guru99.com/file-permissions.html

=> Absolute Numeric modeL :-

      Number        Permission Type          Symbol

       0           No permission              ---

       1           Execute                    --x

       2           Write                      -w-

       3           Execute + Write            -wx

       4           Read                       r--

       5           Read + Execute             r-x

       6           Read + Write               rw-

       7           Read + write + Execute     rwx




 => Method Use in command using Above numbers:-

   examples => a) $ sudo Chmod 777 -R /var/www/html

         b) $ sudo chmod 777 -R html

   --> These Both commands are used for a single purpose to give permission to make new folder and write and read also.

2) If File Are Locked Then use the below methods:-

  a) $ sudo rm/var/apt/lists/lock
  b) $ sudo rm/var/lib/dpkg/lock
  c) $ sudo rm/var/cache/apt/archives/lock



-------------------The General terms Stand For:- ----------------------

 1) Sudo ==> Used for Admin

 2) apt  ==> Advanced Packaging Tool 