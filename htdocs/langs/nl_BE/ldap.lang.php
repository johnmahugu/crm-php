<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$ldap = array(
		'CHARSET' => 'UTF-8',
		'DomainPassword' => 'Wachtwoord voor het domein',
		'YouMustChangePassNextLogon' => 'Wachtwoord voor <b>gebruiker %s</b> op het <b>domein %s</b> moet worden veranderd.',
		'UserMustChangePassNextLogon' => 'Gebruiker moet wachtwoord wijzigen op het domein %s',
		'LdapUacf_NORMAL_ACCOUNT' => 'Gebruikersaccount',
		'LdapUacf_DONT_EXPIRE_PASSWORD' => 'Wachtwoord verloopt nooit',
		'LdapUacf_ACCOUNTDISABLE' => 'Account is uitgeschakeld in het domein %s',
		'LDAPInformationsForThisContact' => 'Informatie in LDAP database voor dit contact',
		'LDAPInformationsForThisUser' => 'Informatie in LDAP database voor deze gebruiker',
		'LDAPInformationsForThisGroup' => 'Informatie in LDAP database voor deze groep',
		'LDAPInformationsForThisMember' => 'Informatie in LDAP database voor dit lid',
		'LDAPAttribute' => 'LDAP-attribuut',
		'LDAPAttributes' => 'LDAP-attributen',
		'LDAPCard' => 'LDAP-kaart',
		'LDAPRecordNotFound' => 'Record niet gevonden in de LDAP database',
		'LDAPUsers' => 'Gebruikers in LDAP database',
		'LDAPGroups' => 'Groepen in de LDAP database',
		'LDAPFieldStatus' => 'Status',
		'LDAPFieldFirstSubscriptionDate' => 'Eerste abonnement datum',
		'LDAPFieldFirstSubscriptionAmount' => 'Fist abonnement bedrag',
		'LDAPFieldLastSubscriptionDate' => 'Laatste inschrijvingsdatum',
		'LDAPFieldLastSubscriptionAmount' => 'Laatste abonnement bedrag',
		'SynchronizeDolibarr2Ldap' => 'Synchroniseren gebruiker (Dolibarr - LDAP)',
		'UserSynchronized' => 'Gebruiker gesynchroniseerd',
		'GroupSynchronized' => 'Group synchronized',
		'MemberSynchronized' => 'Member synchronized',
		'ContactSynchronized' => 'Contact synchronized',
		'ForceSynchronize' => 'Force synchroniserende Dolibarr - LDAP',
		'ErrorFailedToReadLDAP' => 'Failed to read LDAP-database. Check LDAP module setup en database toegankelijkheid.'
);
?>