# What's up with the Scribus indic branch?

Yesterday, Cezary asked me who is taking care of the Scribus indic branch and just a few hours later, Padhu asked on IRC about installing the same indic branch (the solution for him -- a Linux Mint user -- was to get the PPA you can find at https://launchpad.net/~ale-comp-06/+archive/scribus-git-indic).

It was time to ask Anil about the state of his work and about his plans for getting his work merged into the 1.5.0 trunk!

The news are good: people are testing actively using his branch and reporting issues -- mainly issues concerning specific fonts -- to him, and he fixes them!




 Regarding indic branch of scribus. We are testing it locally. Some Malayalam and Telugu people are using it now. The reported issues are corrected. However, I fail to watch the bug reporting page of Scribus to check whether there is any bug reported. I shall do it. The local reported issues are mainly regarding the issues with the fonts they are using.

   Additionally, we have developed an editorial work flow plugin for Scribus with PostgreSQL as database. Currently this is on testing for Telugu daily Prajasakti ( http://www.prajasakti.com/home ) Hope the Prajasakti will be running Scribus based layout system with integrated workflow by February 2013.  I shall release the workflow engine once it is tested fully. However, it is much dependent on the underlying database design.

     For the indic scribus, the incorporation off hyphenation rule are yet to be addressed.  I shall attempt it in my free time. However, it is not a critical one for production as the rendering engine itself shall take care of not dividing a syllable.

	   Let me know, whether, you have noticed any critical issue in indic branch, which prevent its integration with 1.5.0 trunk.
