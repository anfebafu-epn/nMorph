// Generated by Haxe 4.2.2

#pragma warning disable 109, 114, 219, 429, 168, 162
public class DateTools : global::haxe.lang.HxObject {
	
	static DateTools() {
		unchecked{
			global::DateTools.DAY_SHORT_NAMES = new global::Array<string>(new string[]{"Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"});
			global::DateTools.DAY_NAMES = new global::Array<string>(new string[]{"Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"});
			global::DateTools.MONTH_SHORT_NAMES = new global::Array<string>(new string[]{"Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"});
			global::DateTools.MONTH_NAMES = new global::Array<string>(new string[]{"January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"});
			global::DateTools.DAYS_OF_MONTH = new global::Array<int>(new int[]{31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31});
		}
	}
	
	
	public DateTools(global::haxe.lang.EmptyObject empty) {
	}
	
	
	public DateTools() {
		global::DateTools.__hx_ctor__DateTools(this);
	}
	
	
	protected static void __hx_ctor__DateTools(global::DateTools __hx_this) {
	}
	
	
	public static global::Array<string> DAY_SHORT_NAMES;
	
	public static global::Array<string> DAY_NAMES;
	
	public static global::Array<string> MONTH_SHORT_NAMES;
	
	public static global::Array<string> MONTH_NAMES;
	
	public static string __format_get(global::Date d, string e) {
		unchecked {
			switch (e) {
				case "%":
				{
					return "%";
				}
				
				
				case "A":
				{
					return global::DateTools.DAY_NAMES[((int) (global::haxe.lang.Runtime.toInt(((object) (d.date.DayOfWeek) ))) )];
				}
				
				
				case "B":
				{
					return global::DateTools.MONTH_NAMES[( d.date.Month - 1 )];
				}
				
				
				case "C":
				{
					return global::StringTools.lpad(global::Std.@string(( d.date.Year / 100 )), "0", 2);
				}
				
				
				case "D":
				{
					return global::DateTools.__format(d, "%m/%d/%y");
				}
				
				
				case "F":
				{
					return global::DateTools.__format(d, "%Y-%m-%d");
				}
				
				
				case "I":
				case "l":
				{
					int hour = ( d.date.Hour % 12 );
					return global::StringTools.lpad(global::Std.@string(( (( hour == 0 )) ? ((object) (12) ) : ((object) (hour) ) )), ( (( e == "I" )) ? ("0") : (" ") ), 2);
				}
				
				
				case "M":
				{
					return global::StringTools.lpad(global::Std.@string(d.date.Minute), "0", 2);
				}
				
				
				case "R":
				{
					return global::DateTools.__format(d, "%H:%M");
				}
				
				
				case "S":
				{
					return global::StringTools.lpad(global::Std.@string(d.date.Second), "0", 2);
				}
				
				
				case "T":
				{
					return global::DateTools.__format(d, "%H:%M:%S");
				}
				
				
				case "Y":
				{
					return global::Std.@string(d.date.Year);
				}
				
				
				case "a":
				{
					return global::DateTools.DAY_SHORT_NAMES[((int) (global::haxe.lang.Runtime.toInt(((object) (d.date.DayOfWeek) ))) )];
				}
				
				
				case "b":
				case "h":
				{
					return global::DateTools.MONTH_SHORT_NAMES[( d.date.Month - 1 )];
				}
				
				
				case "d":
				{
					return global::StringTools.lpad(global::Std.@string(d.date.Day), "0", 2);
				}
				
				
				case "e":
				{
					return global::Std.@string(d.date.Day);
				}
				
				
				case "H":
				case "k":
				{
					return global::StringTools.lpad(global::Std.@string(d.date.Hour), ( (( e == "H" )) ? ("0") : (" ") ), 2);
				}
				
				
				case "m":
				{
					return global::StringTools.lpad(global::Std.@string(( ( d.date.Month - 1 ) + 1 )), "0", 2);
				}
				
				
				case "n":
				{
					return "\n";
				}
				
				
				case "p":
				{
					if (( d.date.Hour > 11 )) {
						return "PM";
					}
					else {
						return "AM";
					}
					
				}
				
				
				case "r":
				{
					return global::DateTools.__format(d, "%I:%M:%S %p");
				}
				
				
				case "s":
				{
					return global::Std.@string(((int) (( ( ((double) (((long) (( ((long) (global::System.TimeZone.CurrentTimeZone.ToUniversalTime(((global::System.DateTime) (d.date) )).Ticks) ) - ((long) (global::Date.epochTicks) ) )) )) ) / ((double) (global::System.TimeSpan.TicksPerMillisecond) ) ) / 1000 )) ));
				}
				
				
				case "t":
				{
					return "\t";
				}
				
				
				case "u":
				{
					int t = ((int) (global::haxe.lang.Runtime.toInt(((object) (d.date.DayOfWeek) ))) );
					if (( t == 0 )) {
						return "7";
					}
					else {
						return global::Std.@string(t);
					}
					
				}
				
				
				case "w":
				{
					return global::Std.@string(((int) (global::haxe.lang.Runtime.toInt(((object) (d.date.DayOfWeek) ))) ));
				}
				
				
				case "y":
				{
					return global::StringTools.lpad(global::Std.@string(( d.date.Year % 100 )), "0", 2);
				}
				
				
				default:
				{
					throw new global::haxe.exceptions.NotImplementedException(((string) (global::haxe.lang.Runtime.concat(global::haxe.lang.Runtime.concat("Date.format %", e), "- not implemented yet.")) ), default(global::haxe.Exception), ((object) (new global::haxe.lang.DynamicObject(new int[]{302979532, 1547539107, 1648581351}, new object[]{"__format_get", "DateTools", "DateTools.hx"}, new int[]{1981972957}, new double[]{((double) (101) )})) ));
				}
				
			}
			
		}
	}
	
	
	public static string __format(global::Date d, string f) {
		unchecked {
			global::System.Text.StringBuilder r_b = new global::System.Text.StringBuilder();
			int p = 0;
			while (true) {
				int np = global::haxe.lang.StringExt.indexOf(f, "%", new global::haxe.lang.Null<int>(p, true));
				if (( np < 0 )) {
					break;
				}
				
				{
					global::haxe.lang.Null<int> len = new global::haxe.lang.Null<int>(( np - p ), true);
					r_b.Append(((string) (f) ), ((int) (p) ), ((int) (( ( ! (len.hasValue) ) ? (( f.Length - p )) : ((len).@value) )) ));
				}
				
				r_b.Append(((string) (global::Std.@string(global::DateTools.__format_get(d, global::haxe.lang.StringExt.substr(f, ( np + 1 ), new global::haxe.lang.Null<int>(1, true))))) ));
				p = ( np + 2 );
			}
			
			{
				global::haxe.lang.Null<int> len1 = new global::haxe.lang.Null<int>(( f.Length - p ), true);
				r_b.Append(((string) (f) ), ((int) (p) ), ((int) (( ( ! (len1.hasValue) ) ? (( f.Length - p )) : ((len1).@value) )) ));
			}
			
			return r_b.ToString();
		}
	}
	
	
	public static string format(global::Date d, string f) {
		return global::DateTools.__format(d, f);
	}
	
	
	public static global::Date delta(global::Date d, double t) {
		double t1 = ( ( ((double) (((long) (( ((long) (global::System.TimeZone.CurrentTimeZone.ToUniversalTime(((global::System.DateTime) (d.date) )).Ticks) ) - ((long) (global::Date.epochTicks) ) )) )) ) / ((double) (global::System.TimeSpan.TicksPerMillisecond) ) ) + t );
		return new global::Date(((global::System.DateTime) (global::System.TimeZone.CurrentTimeZone.ToLocalTime(((global::System.DateTime) (new global::System.DateTime(((long) (( ((long) (( t1 * ((double) (global::System.TimeSpan.TicksPerMillisecond) ) )) ) + ((long) (global::Date.epochTicks) ) )) ))) ))) ));
	}
	
	
	public static global::Array<int> DAYS_OF_MONTH;
	
	public static int getMonthDays(global::Date d) {
		unchecked {
			int month = ( d.date.Month - 1 );
			int year = d.date.Year;
			if (( month != 1 )) {
				return global::DateTools.DAYS_OF_MONTH[month];
			}
			
			bool isB = ( ( ( ( year % 4 ) == 0 ) && ( ( year % 100 ) != 0 ) ) || ( ( year % 400 ) == 0 ) );
			if (isB) {
				return 29;
			}
			else {
				return 28;
			}
			
		}
	}
	
	
	public static double seconds(double n) {
		return ( n * 1000.0 );
	}
	
	
	public static double minutes(double n) {
		return ( ( n * 60.0 ) * 1000.0 );
	}
	
	
	public static double hours(double n) {
		return ( ( ( n * 60.0 ) * 60.0 ) * 1000.0 );
	}
	
	
	public static double days(double n) {
		return ( ( ( ( n * 24.0 ) * 60.0 ) * 60.0 ) * 1000.0 );
	}
	
	
	public static object parse(double t) {
		unchecked {
			double s = ( t / 1000 );
			double m = ( s / 60 );
			double h = ( m / 60 );
			int tmp = ((int) (( s % 60 )) );
			int tmp1 = ((int) (( m % 60 )) );
			int tmp2 = ((int) (( h % 24 )) );
			{
				int __temp_odecl1 = ((int) (( h / 24 )) );
				return new global::haxe.lang.DynamicObject(new int[]{}, new object[]{}, new int[]{24422, 727985871, 1113807511, 1407096607, 1519236735}, new double[]{( t % 1000 ), ((double) (tmp2) ), ((double) (__temp_odecl1) ), ((double) (tmp1) ), ((double) (tmp) )});
			}
			
		}
	}
	
	
	public static double make(object o) {
		return ( global::haxe.lang.Runtime.getField_f(o, "ms", 24422, true) + ( 1000.0 * (( ((int) (global::haxe.lang.Runtime.getField_f(o, "seconds", 1519236735, true)) ) + ( 60.0 * (( ((int) (global::haxe.lang.Runtime.getField_f(o, "minutes", 1407096607, true)) ) + ( 60.0 * (( ((int) (global::haxe.lang.Runtime.getField_f(o, "hours", 727985871, true)) ) + ( ((double) (24.0) ) * ((double) (((int) (global::haxe.lang.Runtime.getField_f(o, "days", 1113807511, true)) )) ) ) )) ) )) ) )) ) );
	}
	
	
}


