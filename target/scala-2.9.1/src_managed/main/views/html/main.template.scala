
package views.html

import play.templates._
import play.templates.TemplateMagic._

import play.api.templates._
import play.api.templates.PlayMagic._
import models._
import controllers._
import play.api.i18n._
import play.api.mvc._
import play.api.data._
import views.html._
/**/
object main extends BaseScalaTemplate[play.api.templates.Html,Format[play.api.templates.Html]](play.api.templates.HtmlFormat) with play.api.templates.Template2[String,Html,play.api.templates.Html] {

    /**/
    def apply/*1.2*/(title:String = "")(body: => Html):play.api.templates.Html = {
        _display_ {

Seq(format.raw/*1.36*/("""

<!DOCTYPE html>
<html>
    <head>
        <title>"""),_display_(Seq(/*6.17*/title)),format.raw/*6.22*/("""</title>
        <link rel="stylesheet" media="screen" href=""""),_display_(Seq(/*7.54*/asset("public/stylesheets/main.css"))),format.raw/*7.90*/("""">
        <link rel="shortcut icon" type="image/png" href=""""),_display_(Seq(/*8.59*/asset("public/images/favicon.png"))),format.raw/*8.93*/("""">
        <script src=""""),_display_(Seq(/*9.23*/asset("public/javascripts/jquery-1.6.4.min.js"))),format.raw/*9.70*/("""" type="text/javascript"></script>
    </head>
    <body>
        """),_display_(Seq(/*12.10*/body)),format.raw/*12.14*/("""
    </body>
</html>
"""))}
    }
    
    def render(title:String,body:Html) = apply(title)(body)
    
    def f:((String) => ( => Html) => play.api.templates.Html) = (title) => (body) => apply(title)(body)
    
    def ref = this

}
                /*
                    -- GENERATED --
                    DATE: Tue Mar 20 02:23:42 EDT 2012
                    SOURCE: /home/arrorn/workspace/WebMaster/app/views/main.scala.html
                    HASH: ad75ef6310ca629763f08dc7769d8c3e531599a6
                    MATRIX: 509->1|615->35|702->92|728->97|821->160|878->196|970->258|1025->292|1081->318|1149->365|1250->435|1276->439
                    LINES: 19->1|22->1|27->6|27->6|28->7|28->7|29->8|29->8|30->9|30->9|33->12|33->12
                    -- GENERATED --
                */
            