<html><body>
<?php
require 'vendor/autoload.php';

/** 
 * Reference: http://www.sitepoint.com/essentials-ldap-php/
 * Your ldap server information, you need change here...
 * dc: Domain Component
 * cn: Common Name
 * Host: your ldap server ip address

*/
$baseDn = 'dc=homestead,dc=localdomain';
$options = array(
    'host' => '192.168.10.10',
    'password' => 'homestead',
    'bindRequiresDn' => true,
    'baseDn' => 'dc=homestead,dc=localdomain',
    'username' => "cn=admin,$baseDn"
);
$ldap = new Zend\Ldap\Ldap($options);
$ldap->bind();


// Search
/*$result = $ldap->search(
   '(objectclass=*)',
   "ou=People,$baseDn",
   Zend\Ldap\Ldap::SEARCH_SCOPE_SUB
);

print json_encode($result->toArray());
*/

// Update
/*
$hm = $ldap->getEntry(
    "cn=Rajesh Koothrappali,ou=People,$baseDn"
);
Zend\Ldap\Attribute::setAttribute(
    $hm, 'mail', 'koothrappalir@homestead.localdomain'
);
$ldap->update(
    "cn=Rajesh Koothrappali,ou=People,$baseDn", $hm
);*/

// Delete
/*
try {
    $ldap->delete("cn=Hans Meier,ou=People,$baseDn");
} catch (\Zend\Ldap\Exception\LdapException $e) {
    print $e->getMessage();
} 
*/

?>
</body>
</html>