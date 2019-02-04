-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 08:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thepurplecode`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_desc` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `add_date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `spec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_desc`, `post_image`, `add_date`, `user_id`, `spec_id`) VALUES
(11, 'Adobe Experience Manager vs. WordPress: The Authoring Experience Compared', '<p><strong>Thanks, WordPress and Gutenberg</strong>, for making block-based editing the standard for authoring web pages. In this article, I&rsquo;m going to compare the new authoring experience in WordPress with the experience from Adobe Experience Manager <em>(AEM)</em>, an enterprise content management system that also embraces block-based editing. I&rsquo;ve implemented both WordPress and AEM for multiple companies <em>(such as Informatica and Twitter)</em> and had to realize that despite the authoring experience is critical for non-technical authors, it is often neglected by developers.</p><p><strong>Adobe Experience Manager</strong> is, compared to <strong>WordPress</strong>, a complex system with a steep learning curve, especially for developers. At the same time, AEM is easier to use than more established and more expensive content management solutions, placing AEM somewhere in between free and very costly solutions.</p><p>From a technical perspective, AEM is a conglomerate of open source technologies with several touches from Adobe, placing AEM somewhere in between open-source and proprietary software. It is those touches from Adobe that make the system shiny and usable. For example, a visual drag and drop page builder has been the standard way for creating pages in AEM &mdash; <em>long before WordPress Gutenberg was born.</em></p>', '40694_blog-post-3.jpeg', '2019-02-04', 15, 2),
(12, 'Designing Emotional Interfaces Of The Future', '<p><em>&quot; When it comes to change, we tend to naturally resist it. The only real boundary we have are our brains telling us that things are best to be left as they&rsquo;ve always been. In this article, Gleb Kuznetsov shares his thoughts and ideas of how interfaces will look like and what sort of extraordinary experiences we can expect in the near future. &quot;</em></p><p><strong>Emotions play a vital role in our decision-making process.</strong></p><p>One second of emotion can change the whole reality for people engaging with a product.</p><p>Humans are an emotionally driven species; we choose certain products not because of what makes sense, but because of how we think they will make us feel. The interfaces of the future will use the concept of emotions within the foundation of product design. The experiences that people use will be based both on intellectual quotient (IQ) and emotional quotient (EQ).</p><p>This article is my attempt to look into the future and see what interfaces we will design in the next ten years. We&rsquo;ll be taking a closer look at the three mediums for interaction:</p><ol><li>Voice .</li><li>Virtual Reality (VR) .</li><li>Augmented Reality (AR) .</li></ol><p>&nbsp;</p><p><strong>Practical Examples Of Future Emotional Interfaces</strong></p><p>How will interfaces look like in the future? Even though we do not have an answer to this question just yet, we can discuss what characteristics interfaces might have. In my opinion, I&rsquo;m sure that we will eventually move away from interfaces full of menus, panels, buttons, and move towards more &lsquo;natural interfaces&rsquo;, i.e. <strong>interfaces that extend our bodies</strong>. The interfaces of the future will not be locked in a physical screen, but instead they will use the power of all five senses. Because of that, they will require a less learning curve &mdash; ideally, no learning curve at all.</p><p><strong>The Importance Of EQ Emotional Intelligence In Business</strong></p><p>Apart from making the experience more natural and reducing the learning curve, designing for emotion has another benefit for product creators: it improves user adoption of the product. It&rsquo;s possible to use humans&rsquo; ability to act on emotions to create better user engagement.</p><p>&nbsp;</p><p>Practical Examples Of Future Emotional Interfaces</p><p>How will interfaces look like in the future? Even though we do not have an answer to this question just yet, we can discuss what characteristics interfaces might have. In my opinion, I&rsquo;m sure that we will eventually move away from interfaces full of menus, panels, buttons, and move towards more &lsquo;natural interfaces&rsquo;, i.e. <strong>interfaces that extend our bodies</strong>. The interfaces of the future will not be locked in a physical screen, but instead they will use the power of all five senses. Because of that, they will require a less learning curve &mdash; ideally, no learning curve at all.</p><p>The Importance Of EQ Emotional Intelligence In Business</p><p>Apart from making the experience more natural and reducing the learning curve, designing for emotion has another benefit for product creators: it improves user adoption of the product. It&rsquo;s possible to use humans&rsquo; ability to act on emotions to create better user engagement.</p><p><strong>Voice Interfaces That Feel Real</strong></p><p>Products that use voice as the primary interface are becoming more and more popular. Many of us use Amazon Echo and Apple Siri for daily routine activities such as setting an alarm clock or making an appointment. But <strong>a majority of voice interaction systems available on the market today still have a natural limitation</strong>: they do not take user emotions into account. As a result, when users interact with products like Google Now, they have a strong sense of communicating with a machine &mdash; not a real human being. The system responds predictably, and their responses are scripted. It&rsquo;s impossible to have a meaningful dialogue with such a system.</p><p>&nbsp;</p><p>Practical Examples Of Future Emotional Interfaces</p><p>How will interfaces look like in the future? Even though we do not have an answer to this question just yet, we can discuss what characteristics interfaces might have. In my opinion, I&rsquo;m sure that we will eventually move away from interfaces full of menus, panels, buttons, and move towards more &lsquo;natural interfaces&rsquo;, i.e. <strong>interfaces that extend our bodies</strong>. The interfaces of the future will not be locked in a physical screen, but instead they will use the power of all five senses. Because of that, they will require a less learning curve &mdash; ideally, no learning curve at all.</p><p>The Importance Of EQ Emotional Intelligence In Business</p><p>Apart from making the experience more natural and reducing the learning curve, designing for emotion has another benefit for product creators: it improves user adoption of the product. It&rsquo;s possible to use humans&rsquo; ability to act on emotions to create better user engagement.</p><p>Voice Interfaces That Feel Real</p><p>Products that use voice as the primary interface are becoming more and more popular. Many of us use Amazon Echo and Apple Siri for daily routine activities such as setting an alarm clock or making an appointment. But <strong>a majority of voice interaction systems available on the market today still have a natural limitation</strong>: they do not take user emotions into account. As a result, when users interact with products like Google Now, they have a strong sense of communicating with a machine &mdash; not a real human being. The system responds predictably, and their responses are scripted. It&rsquo;s impossible to have a meaningful dialogue with such a system.</p><p>But there are some completely different systems available on the market today. One of them is <a href=\"https://en.wikipedia.org/wiki/Xiaoice\">Xiaoice</a>, a social chatbot application. This app has an emotional computing framework at its core; the app is built on the idea that it&rsquo;s essential to establish an emotional connection with the user first. Xiaoice can dynamically recognize emotion and engage the user throughout long conversations with relevant responses. As a result, when users interact with Xiaoice they feel like they&rsquo;re having a conversation with a real human being.</p><p>The limitation of Xiaoice is that it&rsquo;s a text-based chat app. It&rsquo;s evident that you can achieve a more powerful effect by making voice-based interactions (the human voice has different characteristics such as a tone that can convey a powerful spectrum of emotions).</p><p>Many of us have seen the power of voice-based interactions in the film &ldquo;Her&rdquo; (2013). Theodore (the main character played by Joaquin Phoenix) fell in love with Samantha (a sophisticated OS). This also makes us believe that one of the primary purposes of voice-based systems of the future will be a virtual companion to users. The most interesting thing about this film is that Theodore did not have a visual image of the Samantha &mdash; he only had her voice. To build that kind of intimacy, it&rsquo;s essential to generate responses that reflect a consistent personality. This will make the system both predictable and trustworthy.</p><p>Technology is still a long away from a system like Samantha, but I believe that <strong>voice-first multimodal interfaces will be the next chapter in the evolution of voice-enabled interfaces</strong>. Such interfaces will use voice as a primary way of interaction and provide additional information in a context that creates and builds a sense of connection.</p><p>The Evolution Of AR Experience</p><p>Augmented Reality (AR) is defined as a digital overlay on top of the real world and transforms the objects around us into interactive digital experiences. Our environment becomes more &lsquo;intelligent&rsquo; and users have an illusion of &lsquo;tangible&rsquo; objects on the tips of their fingers, which establishes a deeper connection between a user and a product (or content).</p><p>Reimagine Existing Concepts Using AR</p><p>The unique aspect of AR is that it gives us an extraordinary ability to <em>physically</em> interact with digital content. It allows us to see things that we could not see before and this helps us <strong>learn more about the environment around us</strong>. This AR property helps designers to create new level experiences using familiar concepts.</p><p>For example, by using mobile AR, it&rsquo;s possible to create a new level of in-flight experience that allows a passenger to see detailed information about her class or current flight progress:</p><p>&nbsp;</p><p>AR helps us find our way through spaces and get the required information at a glance. For example, AR can be used to create rich contextual hints for your current location. The technology known as <a href=\"https://en.wikipedia.org/wiki/Simultaneous_localization_and_mapping\">SLAM</a> (<strong>S</strong>imultaneous <strong>L</strong>ocalization <strong>A</strong>nd <strong>M</strong>apping) is perfect for this. SLAM allows real-time mapping of an environment and also makes it possible to place multimedia content into the environment.</p><p>There are massive opportunities for providing value to users. For example, users can point their devices at a building and learn more about it right there on their screens. It significantly reduces the effort and allows for an emotional experience of ease by allowing navigation and access.</p><p>&nbsp;</p><p>The environment around us (such as walls or floors) can become a scene for interactivity in ways that used to be limited to our smartphones and computers.</p><p>The concept that you see below does just that; it uses a physical object (white wall) as a canvas for the content usually delivered using a digital device:</p><p>&nbsp;</p><p>The concept of interactive walls &mdash; a digital overlay on top of the real world.</p><p><strong>Avoiding Information Overload</strong></p><p>Many of us saw the video called &ldquo;HYPER-REALITY&rdquo;. In this video, the physical and digital worlds have merged, and the user is overwhelmed with a vast amount of information.</p><p>Technology allows us to display several different objects at the same time. When it&rsquo;s misused, it can easily cause overload.</p><p>Information overload is a serious issue that has a negative impact on user experience and avoiding it will be one of the goals of designing for AR. Well-designed apps will filter out elements that are irrelevant to users using the power of AI.</p><p><strong>Advanced Personalization</strong></p><p>Personalization in digital experience happens when the system curates the content or functionality to users&rsquo; needs and expectations in real time. Many modern mobile apps and websites use the concept of personalization to provide relevant content. For example, when you visit Netflix, the list of movies you see is personalized based on your interests.</p><p>AR glasses allow creating a new level of personalization, i.e. an &lsquo;advanced&rsquo; level of personalization. Since the system &lsquo;sees&rsquo; what the user sees, it&rsquo;s possible to utilize this information to make a relevant recommendation or provide additional information in context. Just imagine that you&rsquo;ll soon be wearing AR glasses, and the information that is transferred to your retina will be <strong>tailored to your needs</strong>.</p><p>Here&rsquo;s a foretaste of what&rsquo;s in store for us:</p><p>Moving From Augmented Reality Towards Virtual Reality To Create An Immersive Experience</p><p>AR experience has a natural limitation. As users, we have a clear line between us and content; this line separates one world (AR) with another (real world). This line causes a sense that the AR world is clearly not real.</p><p>You probably know how to solve this limitation, i.e. with virtual reality (VR), of course. VR is not exactly a new medium, but it&rsquo;s only been in the last few years that technology has reached a point where it allowed designers to create immersive experiences.</p><p><strong>Conclusion</strong></p><p>When we think about the modern state of product design, it becomes evident that we are only at the tip of the iceberg because we&rsquo;re pretty limited to flat screens.</p><p>We&rsquo;re witnessing a fundamental shift in Human-Computer Interaction (HCI) &mdash; <strong>rethinking the whole concept of digital experience</strong>. In the next decade, designers will break the glass (the era of mobile devices as we know them today) and move to the interfaces of the future &mdash; sophisticated voice interfaces, advanced ARs, and truly immersive VRs. And when it comes to creating a new experience, it&rsquo;s essential to understand that the only boundary we have are our brains telling us it&rsquo;s got to be how it&rsquo;s always been.</p>', '96726_blog-post-5.jpeg', '2019-02-04', 15, 4),
(13, ' Business & Tech 6 Ways Designers Can Avoid Infringing Intellectual Property Rights ', '<p>As the managing attorney of a commercial law boutique practice, I am asked several times per week some variation of the following question:</p><p>How should I best protect my intellectual property from being stolen? Is it as simple as filling out a copyright or trademark application and paying a small fee to a do it yourself on-line service? Will that really provide sufficient protection?</p><p>What do you think?</p><p>I have set forth below a few of the many aspects of protecting your intellectual property in the United States that go beyond blindly filing such a copyright or trademark application. It is a complex area of the law, and this article does not address all of the potential issues. For example, intellectual property in the United States is protected not just by federal law (as one might expect), but in many cases, state-specific law applies (such as when dealing with trade secret or confidentiality agreements).</p><p>The nature of potentially protectable intellectual property ranges from the typical (such as literature, television, film and music) to the esoteric (such as clothing lines, video games and apps). Infringement can range from outright copying and use of someone else&rsquo;s registered intellectual property to merely exceeding the rights granted under a license to use it.</p><p>This article should be considered only a beginning; the reader should consult counsel to address specific situations.</p><p>1. When it Comes to Intellectual Property Filings, Self-Reliance is Not a Virtue</p><p>&ldquo;Move fast and break things&rdquo; is a terrific way to end up being sued. It does not take a great deal of time to file a trademark or copyright incorrectly. It is actually fairly quick, painless and inexpensive. But as in all things relating to the law, the hard way is still the right way.</p><p>Simply put, you must understand why you are filling out those boxes on the form, what the ramifications of the alternatives are and what else you need to do to protect yourself beyond simply filling out the form. When filing a copyright application with the <a href=\"https://www.copyright.gov/\">United States Copyright Office</a> or a trademark application with the <a href=\"https://www.uspto.gov/\">United States Patent and Trademark Office</a>, you should be asking some basic questions, including: what is protectable and what is not; are you going to infringe on someone else&rsquo;s existing intellectual property; and can anyone else on your end assert that they have rights as a co-creator in what you are registering?</p><p>&nbsp;</p><p>2. A Search of the USPTO Website for Similar Trademarks to Yours Should Not Be Relied Upon</p><p>Admittedly, the United States Patent and Trademark Office website has a search function for finding registered trademarks. But, generally speaking, that will not pick up everything a private investigation firm specializing in intellectual property matters will locate. Moreover, the database only identifies registered trademarks. That means other parties may have superior rights to yours&mdash;and potential claims against you for infringement&mdash;merely by using the mark. Accordingly, whether they have a reg</p><p>3. Do Not Ignore Intellectual Property Rights Outside the United States</p><p>We are fortunate that the United States is a member of the <a href=\"https://www.wipo.int/treaties/en/registration/madrid/\">Madrid Agreement Concerning the International Registration of Marks</a> (commonly known as the Madrid Protocol), a means by which registration in one country can be leveraged to allow for intellectual property protection in others that are signatories to that treaty. The important point to keep in mind is that any potential infringement issue relating to use in the domestic United States must also be viewed in terms of whether there is a corresponding infringement outside the United States.</p><p>&nbsp;</p><p>4. The Term &ldquo;Quitclaim Assignment&rdquo; Should Become Part of Your Vocabulary</p><p>There is a clear correlation between the number of people claiming some level of ownership of intellectual property and the value of that intellectual property. Simply put, success breeds claims for financial participation.</p><p>It is usually far better to ask someone to waive those claims before the intellectual property is actually utilized in a way that creates value. One of the problems is that it is not always clear what rights everyone has, nor what everyone is giving up.</p><p>In an ideal world, rights ownership would be discussed before any intellectual property were even created, and those rights would then be memorialized in a joint intellectual property ownership agreement, a work-for-hire agreement or other document that would establish precisely who would own what. But we do not live in that ideal world, and often the issues are ignored until the filing is about to be made. The law accounts for that as well. Believe it or not, the law generally provides for a way of assigning all right title and interest to whatever a person has, regardless of whether they know what that is. It is called a &ldquo;quitclaim assignment&rdquo;.</p><p>istered mark that is searchable in the USPTO database is not the sole issue.</p><p>5. A Quitclaim Assignment Should Have Certain Key Terms</p><p>It is impossible to provide a complete list of all the terms that should be included in every quitclaim assignment. For example, there are differences in what can be included in such a document that vary not only state-by-state, but also by country. However, there are a few fairly universal basics:</p><ul><li>the rights that are and are not being given up, and a catch-all provision that the assignment includes even those rights that are unknown;</li><li>the payment or other consideration that will be provided for entering into the quitclaim assignment;</li><li>how disputes relating to the quitclaim assignment will be resolved e.g., through arbitration or a lawsuit; and</li><li>the fact that the assignor knows what they are signing (e.g., has had the right to be represented by counsel; to ask any questions; and in every respect wants to enter into the quitclaim assignment).</li></ul><p>&nbsp;</p><p>6. If You Do Receive a Cease and Desist Letter From Someone Asserting You Have Violated Their Intellectual Property Rights, Don&rsquo;t Shoot First and Ask Questions Later</p><p>A cease and desist letter is not a lawsuit. The fact that you receive such a document simply means that someone is alleging that you have violated their intellectual property rights. It does not necessarily mean that they are prepared to file an immediate lawsuit, nor that they would win if they did so.</p><p>While every situation is different, there are a few preliminary steps that usually make sense:</p><ol><li>Determine with your counsel whether in fact you have violated the other party&rsquo;s intellectual property rights.</li><li>If you have, seek to open a dialogue to consider whether you can accede to their demand that you cease and desist in return for a release of liability. I hasten to add that it may not be possible to correct the infringement: the party sending the cease and desist letter may be making unreasonable demands; the determination as to whether you did or did not infringe may be arguable either way; etc. In other words, there is no one right way of handling a situation in which you have determined in your own mind that you did indeed infringe on someone else&rsquo;s intellectual property rights.</li><li>If you have not violated the other party&rsquo;s intellectual property rights, respond to the letter in a substantive manner that sets forth why you believe you are right; the letter should leave open the possibility of further dialogue.</li><li>You should retain an attorney to employ the above strategy. This comes under the heading of hoping for the best but preparing for the worst. Your attorney should author the above-referenced correspondence and discuss with you whether there are any preemptive litigation strategies you should employ. A perfect example would be the issue of whether to seek a declaratory judgment or other determination that your rights are superior before you are sued for infringement.</li><li>Once you receive that cease and desist letter, you are officially &ldquo;on notice&rdquo; of the intellectual property holder&rsquo;s asserted rights. If they have superior rights to yours and a valid claim, your continued use of the mark could put you at risk for enhanced damages based upon what is referred to as &ldquo;willful infringement.&rdquo; You need to evaluate immediately (ideally with legal counsel) what to do with the allegedly infringing product while you are engaging in this process. Do you continue your business and make sales while the dispute continues? Do you need to stop immediately and change everything, despite perhaps years and significant marketing spent building your brand? In answering those questions, you must keep in mind that whatever you do may have unintended consequences, such as for example, if your actions are later misinterpreted as constituting an admission that you did infringe.</li></ol><p>&nbsp;</p><p>Conclusion</p><p>All in all, it is critical that you not only take a challenge to your intellectual property rights seriously, but respond to it proactively. Your aim should be to anticipate what the challenge may be&mdash;to extrapolate, as it were&mdash;and head off the problem before it grows worse. I hope this article will help you start that process.</p>', '79268_blog-post-6.jpeg', '2019-02-04', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `spec_id` int(11) NOT NULL,
  `spec_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`spec_id`, `spec_name`) VALUES
(1, 'Web Design'),
(2, 'App Develop'),
(3, 'UX Design'),
(4, 'UI Design'),
(5, 'Branding'),
(6, 'Media');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `firstName`, `lastName`, `email`, `password`, `userType_id`) VALUES
(15, 'loza', 'lazord', 'elfizga', 'loza@gmail.com', '123456789', 1),
(16, 'munah', 'muna', 'elboashi', 'muna@gmail.com', 'munah1999', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `Type_id` int(11) NOT NULL,
  `TypeName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`Type_id`, `TypeName`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `spec_id` (`spec_id`),
  ADD KEY `userid` (`user_id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`spec_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `userType_id` (`userType_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`Type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `spec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `Type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `spec_id` FOREIGN KEY (`spec_id`) REFERENCES `specializations` (`spec_id`),
  ADD CONSTRAINT `userid` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `userType_id` FOREIGN KEY (`userType_id`) REFERENCES `user_type` (`Type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
