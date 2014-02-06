<cfquery name="insertlead" datasource="preneodb">
INSERT INTO EMLeads (leadFirstName)
VALUES ('#form.usermail#')
</cfquery>
<cfquery name="getident" datasource="preneodb">
	Select @@Identity as leadID
</cfquery>

<cfmail from="mbrown@mossbeachceramics.com" to="#form.usermail#" subject="generator service" server="mail.mossbeachceramics.com" port="25">
  This is a test. Need proper verbiage here.
   <cfsilent>
        <cfmailparam file="top1.pdf">
   </cfsilent>
</cfmail>

<cflocation url="contact-us.php?id=#getident.leadID#" addtoken="no">