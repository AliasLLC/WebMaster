
package views.html.Application

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
object index extends BaseScalaTemplate[play.api.templates.Html,Format[play.api.templates.Html]](play.api.templates.HtmlFormat) with play.api.templates.Template1[String,play.api.templates.Html] {

    /**/
    def apply/*1.2*/(title:String):play.api.templates.Html = {
        _display_ {

Seq(format.raw/*1.16*/("""

"""),_display_(Seq(/*3.2*/main(title)/*3.13*/ {_display_(Seq(format.raw/*3.15*/("""
    
    """),_display_(Seq(/*5.6*/views/*5.11*/.defaults.html.welcome(title))),format.raw/*5.40*/("""
    
""")))})))}
    }
    
    def render(title:String) = apply(title)
    
    def f:((String) => play.api.templates.Html) = (title) => apply(title)
    
    def ref = this

}
                /*
                    -- GENERATED --
                    DATE: Tue Mar 20 02:23:42 EDT 2012
                    SOURCE: /home/arrorn/workspace/WebMaster/app/views/Application/index.scala.html
                    HASH: a76f5ab8babfd00d10f083cb077e772ada7e5479
                    MATRIX: 517->1|603->15|637->20|656->31|690->33|732->46|745->51|795->80
                    LINES: 19->1|22->1|24->3|24->3|24->3|26->5|26->5|26->5
                    -- GENERATED --
                */
            