<?php

class NewsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	 DB::table('news')->delete();

        $news = [
        ['title'=>'Surging home sales raise new housing bubble fears',
        'body'=>'The median home price jumped 8% from the previous month to $208,000, according to NAR. While month-to-month price swings are not unusual, the year-over-year rise is now 15%, and prices are at levels last seen in the summer of 2008, just before the bursting of the housing bubble.
May marked the 15th straight month of annual price increases, the first time that happened since May 2006.
Related: Home prices post biggest gain in 7 years
Home prices have been driven higher partly by a drop in foreclosures. Only 18% of home sales in the month were so-called distressed sales, which typically sell at a discount to market prices. A year ago 25% of sales were distressed sales.
Overall sales rose 4% from April and 13% from a year earlier to an annual rate of 5.18 million homes in the month.
Related: Venezuela money fuels Miami housing boom
There are differences between this run-up in prices and the housing bubble that preceded the financial crisis, said Gary Thomas, the Realtors president.',
'bs'=>1
],
        ['title'=>'Existing U.S. home sales reach three-year high',
        'body'=>'Sales of existing U.S. homes in May reached their highest level since November 2009, according to National Association of Realtors data cited by Bloomberg News.
Those sales rose 4.2 percent to an annualized rate of 5.18 million from 4.97 million in April. There were 2.22 million existing homes on the market in May, up from 2.15 million in April. The supply fell to 5.1 months’ worth in May from 5.2 months. Listed inventory is 10.1 percent below a year ago, according to the report released today.
Brian Jones, senior U.S. economist at financial services firm Societe Generale in New York, projected a 5.17 million annual rate for home sales.',
'bs'=>1],
        ['title'=>'Real House Prices, Price-to-Rent Ratio, City Prices relative to 2000',
        'body'=>'The Refinance Index decreased 3 percent from the previous week. The seasonally adjusted Purchase Index decreased 3 percent from one week earlier.
The average contract interest rate for 30-year fixed-rate mortgages with conforming loan balances ($417,500 or less) increased to 4.17 percent, the highest rate since March 2012, from 4.15 percent, with points decreasing to 0.41 from 0.48 (including the origination fee) for 80 percent loan-to-value ratio (LTV) loans. This is the sixth straight weekly increase for this rate. 
Read more at http://www.calculatedriskblog.com/2013/06/mba-mortgage-applications-decrease.html#MAFr7M4qiQK01UoC.99 ',
'bs'=>1],
        ['title'=>'U.S. Home Construction Rose in May',
        'body'=>'The overall pace of homes started rose 6.8 percent in May to a seasonally adjusted annual rate of 914,000, the Commerce Department said on Tuesday. That offset part of the 14.8 percent decline in April. May s rate is still below March s rate of more than one million — the fastest in five years.
Construction increased in May for single-family homes, apartments and condominiums.
Builders sought more permits to build single-family homes, which represent about two-thirds of the market. The seasonally adjusted annual rate rose 1.3 percent to 622,000 — the highest since May 2008. That is a sign that construction will increase further in the coming months.
Permits fell 3.1 percent in May to a seasonally adjusted of 974,000 because of a drop in apartment permits, which are more volatile.
Also, the Labor Department reported on Tuesday that consumer prices rose slightly last month, as higher energy costs partly offset cheaper food. The increase is further evidence that consumers are benefiting from mild inflation.',
'bs'=>2],
        ['title'=>'As housing warms up, appraisers feel the heat',
        'body'=>'Home appraisals were difficult to do during the housing market downtown because there weren t enough recently sold comparable homes to help determine a property s value.
Now the local housing has picked up steam. That has provided more comparable properties to consider in an appraisal, but appraisers say it doesn t make their job of putting a value on a property any easier.
Appraisals are still throwing a wrench in home deals, real estate agents said, forcing sellers to lower their price, buyers to bring money to the closing table or the two sides to meet somewhere in between and renegotiate the contract.
There are fewer distressed properties changing hands, and that s a good thing for traditional sellers hoping that their home will be appraised at its contract sales price. But at the same time, an undersupply of available homes has prompted bidding wars above list price, a price that isn t necessarily justified by an appraisal.',
'bs'=>2
        ],
           ['title'=>'From Gatsby to Mad Men: Home decor through the decades',
        'body'=>'During the Gilded Age, boom times produced incredible wealth for many industrialists like John Pierpont "J.P." Morgan and Andrew Carnegie.The homes of the affluent often boasted grand staircases, double wide pocket doors that slid into the walls, bay windows, and coffered ceilings, according to Trulia. This house in Boston\'s Back Bay area was built in 1883, and features a beautifully crafted staircase made of solid mahogany. Situated near the Charles River, it\'s just a few long blocks from the Common, one of the city\'s finest neighborhoods',
'bs'=>2
        ]


        ];

        // Uncomment the below to run the seeder
        DB::table('news')->insert($news);
    }

}