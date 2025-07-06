-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2025 at 10:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleaner`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `video` mediumtext DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `des` longtext DEFAULT NULL,
  `wptitle1` varchar(255) DEFAULT NULL,
  `wptitle2` varchar(255) DEFAULT NULL,
  `wptitle3` varchar(255) DEFAULT NULL,
  `wptitle4` varchar(255) DEFAULT NULL,
  `wpdes1` varchar(255) DEFAULT NULL,
  `wpdes2` varchar(255) DEFAULT NULL,
  `wpdes3` varchar(255) DEFAULT NULL,
  `wpdes4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `img1`, `img2`, `img3`, `video`, `year`, `des`, `wptitle1`, `wptitle2`, `wptitle3`, `wptitle4`, `wpdes1`, `wpdes2`, `wpdes3`, `wpdes4`, `created_at`, `updated_at`) VALUES
(1, '20250706075004left.jpg', '20250706075004vimg.jpg', '20250706075004right.jpg', 'https://www.youtube.com/watch?v=7jXndDPRrIw', '18', '<h2><strong>Keeping Your Home Cleaner Service</strong></h2><p>&nbsp;</p><p>A cleaning service company specializes in providing professional cleaning solutions for residential, commercial, and industrial spaces. These services range from regular housekeeping tasks to deep cleaning, sanitation, and specialized cleaning services.</p><p>A cleaning service company specializes in providing professional cleaning solutions for residential, commercial, and industrial spaces. These services range from regular housekeeping tasks to deep cleaning, sanitation, and specialized cleaning services.</p>', 'Application/Contact', 'Meeting', 'WorkOrder', 'Cleaning', 'These services range from regular housekeeping tasks to deep cleaning, sanitation, & cleaning services.', 'These services range from regular housekeeping tasks to deep cleaning, sanitation, & cleaning services.', 'These services range from regular housekeeping tasks to deep cleaning, sanitation, & cleaning services.', 'These services range from regular housekeeping tasks to deep cleaning, sanitation, & cleaning services.', '2025-07-06 01:49:08', '2025-07-06 02:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `cleanings`
--

CREATE TABLE `cleanings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sdes` mediumtext DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `des` longtext DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cleanings`
--

INSERT INTO `cleanings` (`id`, `name`, `sdes`, `img`, `des`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Deep Cleaning Services', 'Deep cleaning service is a type of thorough cleaning system of a house or workplace, where every corner, every crevice is cleaned with special care. It is not just visually clean, but also a special process to ensure a healthy and germ-free environment. The main feature of deep cleaning is to deeply clean the areas where dust, germs, oily stains, fungi or bad odors accumulate beyond the normal regular cleaning.', '20250704062301.webp', '<h2><strong>What is Meant by Deep Cleaning Services?</strong></h2><p>Deep cleaning service is a type of thorough cleaning system of a house or workplace, where every corner, every crevice is cleaned with special care. It is not just visually clean, but also a special process to ensure a healthy and germ-free environment. The main feature of deep cleaning is to deeply clean the areas where dust, germs, oily stains, fungi or bad odors accumulate beyond the normal regular cleaning.</p><p>Deep cleaning is usually carried out using specialized cleaning tools, high-power cleaners and disinfectants. As a result, the house or office is not only sparkling externally, but also ensures a livable and healthy environment. It is a unique solution to make the entire space look like new before moving into a new home, when you need to clean after a long period of time, or for a special occasion.</p><p>&nbsp;</p><figure class=\"image\"><img src=\"/storage/uploads/1751610157_73027c344df566304d449bbabc5006ee.webp\"></figure><p>&nbsp;</p><h2><strong>What Do We Offer Deep Cleaning Services in Bangladesh?</strong></h2><p>We provide a wide range of deep cleaning services. Let’s find out what services we offer below:</p><h2><strong>Floor &amp; Tiles Deep Cleaning</strong></h2><p>We completely remove the deep layer of dirt, stains, germs and accumulated garbage from the floor and tiles through deep cleaning. During regular cleaning, dust, oily coating or water stains accumulated in the gaps of the floor or the joints of the tiles are not easily cleaned. Due to this, the brightness of the tiles and floors fades over time and the risk of germs increases. We ensure their proper cleaning.</p><h2><strong>Full Home Deep Cleaning&nbsp;</strong></h2><p>Through full house deep cleaning, every corner of the house is cleaned deeply and thoroughly. It is a much more comprehensive and effective process than a simple daily wipe. Deep cleaning not only makes the house sparkling and clean, but also creates a healthier and more mentally peaceful environment to live in. Our full house deep cleaning ensures long-term maintenance of the house and also ensures the safety of the family by killing germs.</p><h2><strong>Full Office Deep Cleaning&nbsp;</strong></h2><p>Full Office Deep Cleaning thoroughly cleans and disinfects every corner of the office, furniture, equipment, floors, bathrooms, kitchen corners and employee seating areas. This is not a simple sweeping job; rather, it removes dust, stains, greasy coatings, bacteria and odors accumulated over time, transforming the office into a healthy, clean and work-friendly environment.</p><h2><strong>Corporate Office Deep Cleaning</strong></h2><p>Presenting the office workspace as tidy, sanitary, and professional requires this particular service. General cleaning is not nearly as thorough or in-depth as this service. Cleaning includes not only the floor or desk but the complete office area. This service is provided at night or on weekends, so that work is not disrupted. Many organizations take it under a monthly or annual contract, so that uninterrupted cleanliness is maintained.</p><h2><strong>Full Industrial Deep Cleaning&nbsp;</strong></h2><p>Full industrial deep cleaning is a specially designed, professional and high-quality cleaning program for any commercial or large-scale establishment. We basically plan the cleaning by considering the size of the factory, how dirty the machines and floors are.</p><h2><strong>Full Showroom Deep Cleaning&nbsp;</strong></h2><p>This is a complete method of deep cleaning and disinfection from the light fittings of the showroom to the storeroom. The showroom is constantly visited by customers, employees and dust from outside, resulting in rapid accumulation of dirt, which affects the presentation of the product and brand image. Through deep cleaning, a sparkling, healthy and attractive environment is ensured for the visitors in the showroom.</p><h2><strong>Full Hospital Deep Cleaning</strong></h2><p>This type of cleaning is an essential maintenance process for every hospital, which should be done regularly on a monthly, quarterly or annual basis. It is very important to keep every unit and area of ​​the hospital completely sterile, hygienic and clean. Compared to normal cleaning, we clean and disinfect each area in this service more deeply, following specific rules and prescribed protocols.</p><h2><strong>Sofa &amp; Carpet Deep Cleaning&nbsp;</strong></h2><p>It is not possible to clean these with ordinary vacuuming or mopping, because various types of dirt accumulate deep in the fibers of the sofa and carpet, which are not visible to the eye but pose a health risk. For this, you need a professional <a href=\"https://maxenterprise.com.bd/sofa-cleaning-services-in-dhaka/\">Sofa &amp; Carpet cleaning service</a>. Our cleaning techniques keep your sofa and carpet germ-free, sparkling and odor-free.</p><h2><strong>Commercial Building Deep Cleaning&nbsp;</strong></h2><p>If Deep Cleaning is not done regularly, employee illness increases, customer experience deteriorates and the image of the organization can be damaged. Our Commercial Building Deep Cleaning service makes every corner of an office, shopping mall, bank, restaurant, hospital, school, hotel or any commercial establishment completely spotless and sparkling.</p><h2><strong>Residential Building Deep Cleaning</strong></h2><p>Residential buildings have a lot of people moving around, so the risk of dust, mold and germs is high. If there is no regular deep cleaning, the health risks of the building increase and it loses its beauty. Especially during the rainy season or before festivals, this service is very important for the maintenance of the building that we offer.</p><h2><strong>Why is Deep Cleaning Important?&nbsp;</strong></h2><p>Deep cleaning is crucial since it not only improves the house’s aesthetic appeal from the outside but also guarantees a safe and healthy atmosphere by eliminating allergies, dust, bacteria, and fungi that have accumulated within. Daily general cleaning frequently leaves oily stains in the kitchen, grout between bathroom tiles, and dirt buildup behind curtains or beneath sofas unclean.&nbsp;</p><h2><strong>Deep Cleaning Service Cost</strong></h2><p>The cost of a deep cleaning service depends on various factors, such as the scope of cleaning, the size of the space, the number of rooms, how long it will take to clean, and whether it is a home, office, or commercial establishment. Typically, a deep cleaning for a single room or small flat can cost around 1,500 to 3,000 bdt. Moreover, a full house service can cost 6,000 to 12,000 bdt or more.</p><p>There may be additional fees if specialty services like floor washing, sofa steam cleaning, kitchen grease cleanup, or carpet shampoo cleaning are included.&nbsp; Package-based pricing is used by many service providers to offer a variety of services at a discounted rate.</p><h2><strong>Benefits of Our Deep Cleaning Services:</strong></h2><p>Our service quality is different from many others. See what features set us apart from others.</p><h3><strong>We create a peaceful environment</strong></h3><p>We do not just remove dust and dirt, but also remove germs, odors, fungi and invisible discomfort accumulated in every corner of the house so that your family gets a safe and peaceful environment.</p><h3><strong>We take the hassle out of cleaning and save you time</strong></h3><p>In your busy life, leave the responsibility to professionals without thinking about deep cleaning the house. We save you time with fast, perfect and reliable service.</p><h3><strong>We are at a location near you</strong></h3><p>No matter where you live, we are always at a location near you. You can get our services whenever you want. Just call us and you can relax with our deep cleaning service.</p><h3><strong>We have affordable packages</strong></h3><p>Our deep cleaning packages meet the needs and budgets of almost all customers. So if you want to be sure of cleaning within your budget, then trust us.</p><h3><strong>Conclusion</strong></h3><p><a href=\"https://maxcleaningservicesbd.com/\">Max Cleaning</a> has many customers who have used our services more than once and have appreciated our services. We maintain the cleanliness of your place and make it completely new.</p>', 'cleaning_service', '2025-07-04 00:23:01', '2025-07-04 00:27:20'),
(2, 'Bedbugs Control Services', 'MAX Enterprise provides BedBugs Control Services in Bangladesh. We specialized in the Bed Bugs Control Services and were presenting these offerings for years. It makes a specialty of disposing of Bed Bugs from your homes and workplaces.', '20250706052732.webp', '<h2><strong>BedBugs Control Services in Bangladesh</strong></h2><p>MAX Enterprise provides <a href=\"https://maxenterprise.com.bd/bedbugs-control-services/\">BedBugs Control Services</a> in Bangladesh. We specialized in the Bed Bugs Control Services and were presenting these offerings for years. It makes a specialty of disposing of Bed Bugs from your homes and workplaces.</p><p>You are trying to find a professional who let you remove Bed Bugs from your private home or administrative center, we’re the person who will let you address the problem.</p><figure class=\"image\"><img></figure><p>&nbsp;</p><p>BedBugs Manipulation of Bangladesh is a central authority authorized bed bugs control provider business enterprise in Bangladesh. We moreover guarantee 100% satisfactory work and consumer pride. Purchaser pleasure is our motto, which makes us well-known in this organization!</p><h2><strong>Bedbug control</strong></h2><p>Small and smarter, bed bugs are a supply of amazing stress and anxiety for lots many homeowners and businesses. Bed bugs are at the upward thrust in the Bangladesh. in line with the countrywide Pest control affiliation, 1 in 5 people have a mattress at home or recognize a person who faces bed bugs at home or in an inn.</p><p>Some bedbugs can completely damage the reputation your logo has been constructing over the years. Decreasing room rent and even leading to litigation can spread a bed bug attack and can also cause loss of income.</p><p>From Max Enterprise Bed Bug Control Solutions, , Chemical loose warmth treatment to our canine Bed Bug Inspections, we afford its clients with the latest advances in bed bug treatment. bed bugs purpose emotional and physical harm with the aid of spreading itchy bites and panic. For business, bed bugs can cripple an organization’s recognition and bring about a loss of revenue.</p><p>Call MAX Enterprise at + 8801711-107164 + 8801992-028500 + 8801971-107164 or contact us online to talk to a bed bug specialist about whether you have encountered a fungus or want to prevent a potential bed bug problem.</p><p>Bed Bugs truth: Do bed Bugs spread speedy? A lady bed trojan horse can lay 2 hundred-500 eggs in three months.</p><h3><strong>Rentokil bed bug control process</strong></h3><p><strong>Inspection</strong> –</p><p>MAX Enterprise’s bedbug treatment application continually starts with an inspection of the belongings. Our technicians are skilled to discover mattress bugs from insects which can be regularly harassed with bed bugs along with bat bugs or foul-smelling insects. We will additionally use our specially trained mattress bed bugs dogs to assist look at the source of the problem.</p><p><strong>Treatment</strong> –</p><p>Once the inspection is complete, your technician will make bed bug treatment options make bed bug treatment. Different remedy options are advocated for non-chemical remedy relying on a couple of factors including belongings, kind length and client preference. Once the solution is selected, the treatment might be performed through a certified licensed professional on the approved licensing date.</p><h3><strong>Bed bug treatment options</strong></h3><p>As evidenced by their huge resurgence during the last decade, bed insects are very elusive, secretive bugs. It’s far usually first-rate to rent an experienced pest control enterprise to provide relatively mattress malicious program management offerings which can be extremely tough to get rid of parasitic bugs on their very own.</p><p>For more than 90 years within the enterprise, Tenant Kel has advanced a complete complement of mattress worm solutions for houses and business spaces.</p><p><strong>Traditional treatment –</strong></p><p>The maximum generally used answer for disposing of traditional remedy bed insects from Max enterprise. Our nation-licensed technicians follow the formulas to the inflamed place of ​​any region, ensuring that each one viable mattress hiding locations has been dealt with.</p><p><strong>Warmness treatment –</strong></p><p>Endothermic warmness treatment is generally used to treat bed insects. One-day treatment makes use of minimum pesticides, presenting customers with a quick and environmentally friendly solution. The use of transportable warmers, the affected regions are gradually heated to 120ºF, killing the presence of mattress bugs at all life stages.</p><p><strong>Bed malicious program dogs –</strong></p><p>Bed bug dog Inspections – In some instances, your technician might also suggest a k-9 mattress worm inspection. Puppies have the ability to come across odors which can be absolutely invisible to people, together with bed bugs. Our bed worm puppies were educated in the usage of the identical methods as bomb-sniffing dogs.</p><p><strong>Steam remedy –</strong></p><p>Much like heat treatment, steam may be used to kill bed insect’s situation to excessive temperatures. A first rate alternative to using pesticides, there’s also the benefit of attaining deep into a place with the stem of an area.</p>', 'pestcontrol_service', '2025-07-05 23:27:32', '2025-07-05 23:27:32'),
(3, 'Bank, NGO, Hospitals & Clinics cleaning service', 'If you are looking for a Cleaning Service company for Bank, NGO, Hospitals & Clinics Cleaning Service. You come to the right place. Max Enterprise provides all kinds of Cleaning Service. Financial institutions need their clients to recognize that they could accept as true with them with their cash. if your building isn’t always nicely maintained then why do your clients think they may make money? Benefit the belief of your customers with Max Enterprise’s expert financial institution cleaning services.', '20250706201446.webp', '<h2><strong>Bank &amp; NGO Cleaning Service</strong></h2><p>Banks and financial institutions play an essential position in the daily operations of a business and in private banking. So, it’s far crucial to have an easy foyer and workplace to welcome clients and make them experience comfy with the obligations of your economic institution with their financial needs. Welcome to your banking institution.</p><p><a href=\"https://maxenterprise.com.bd/bank-ngo-hospitals-clinics-cleaning-service/\">Bank &amp; NGO Cleaning Service</a> of Max makes sure of a clean workplace. Your workplace is a mirrored image of your financial organization. A workplace that looks dull and cluttered can prevent clients from making any sort of economic funding along with your corporation. Any bank that is crucial for going for walks an enterprise will have an easy, cohesive and alluring environment for all who stroll via their doors. With government cleansing offerings, our banks and financial institutions have an impeccably clean, organized, and experienced enjoy of inviting workplaces and <a href=\"https://simple.wiktionary.org/wiki/lobbies\">lobbies</a> and supporting out with the smallest details every day. you may believe govt clean to correctly constitute your commercial enterprise and showcase your professionalism in every nook of your office.</p><h3><strong>Benefits of Bank Cleaning Services</strong></h3><p>You may think that business cleansing services are one-size-suits-all – however, this is not proper, simply due to the fact your financial institution or economic group wishes a separate cleaning than a college, save, or authorities constructing.</p><p>Specialists at Max&nbsp;Enterprise recognize the unique requirements of banks and provide cleansing offerings designed to offer all the benefits of expert financial institution cleansing offerings.</p><p>In case you need to attract extra agencies and help employees be greater effective, Max Company gives your bank a healthier and extra attractive environment. Max&nbsp;Enterprise bank cleaning services:</p><ul><li>Eliminate germs from the thousands of hands that are brought into your building every day</li><li>Respect your organization’s strict security requirements when we’re on site and communicate with a clear identity</li><li>Keep public surfaces spotless to maintain your professional image</li><li>Give staff a break with a sanitary break room</li></ul>', 'cleaning_service', '2025-07-05 23:38:20', '2025-07-06 14:14:46'),
(4, 'Facility management service company in Bangladesh', 'The facility management service is a highly skilled and technical field. Facility management is a specialized service that helps with planning, designing, maintaining and operating a property. The services offered by a facility management companies are varied and can include cleaning services, pest control, manpower supply, landscape maintenance, security surveillance and catering, etc. If you are looking for the best facility management services in Bangladesh, then you can contact us!', '20250706054148.jpg', '<h2><strong>What is the importance of facility management Service in BD?</strong></h2><p>Facility management service is an essential for a business or a company. It is an essential service that can make the company more efficient, and can save the money of the company. Facility management service is very important in Bangladesh, especially for a large corporate. It ensures that the environment is clean and hygienic, the air is fresh and clean, and the floors are dust free. It also helps in maintenance of facilities like the washrooms, toilets, and the maintenance of furniture in offices. It also helps with other services like pest control and cleaning of carpets and air conditioning. It removes the dust particles in offices to help keep them germ-free and dust free. It also helps with pest control, cleaning of bathrooms and maintaining a healthy working environment for employees is critical.</p><figure class=\"image\"><img src=\"/storage/uploads/1751780504_Facility-management-1.jpg\"></figure><p>&nbsp;</p><h2><strong>What are the types of facility management service in bd?</strong></h2><p>Facility management service company in BD is a very broad term that covers a wide range of different services. Facilities management can be used to describe the management of anything from office buildings to sports stadiums. It can also refer to the management of any type of building, facility or infrastructure. It is a way of managing, operating all types of facilities.</p><p><strong>Managing Facility services:</strong> Facility management is the process of managing the facilities, which are places where people work, learn, or gather. This includes buildings, property, and land. Facility management can be a long-term career or an interim career choice for students.</p><p><strong>Operating Facility management services: </strong>Operating Facility Management (OMM) is a service that helps manage the services of physical assets such as buildings, real estate, vehicles, and equipment. The main objective of Operating Facility Management is to ensure the safe and efficient operations of the physical assets. The term facility management refers to the management of facilities that are part of a business or organization.</p><h2><strong>How do you find the best facility management Company in Dhaka BD?</strong></h2><p>Finding the best facility management Companies in BD is not an easy task. You have to do a lot of research, and you have to make sure that you are choosing the right service provider. You need to be very careful, because there are many facility management service company in Bangladesh, and it is very difficult to find the best one. What is the first thing you need to check in order to make sure that your facility management service provider is a good one? It will be a company, and not just any company. What should you look for in choosing a good agency or manager, who can take care of all your property needs? You need an expert agency that has enough experience within the industry so they are able to provide real solutions on important issues regarding communication with tenants. An organizing support requires sufficient knowledge and skills; regardless of what services it offers these qualities have been proven time after time when contractors handle large organizations ranging from large factories to office buildings.</p><h3><strong>How much does it cost to hire a facility management company in Bangladesh?</strong></h3><p>Hiring a facility management company in Bangladesh is quite a good idea. This will help you to take care of your facility properly and provide you with an efficient and cost-effective service. Hiring a facility management companies can help you save a lot of money and can help you maintain your facility service company BD well.</p><p>The cost of hiring a facility management companies in BD depends on the type of service you require. If you want to hire a service provider for office space, you can expect to pay around 5000 BDT -10000 BDT per month.</p><h3><strong>What are the benefits of hiring a facility management service company in bd?</strong></h3><p>There are many benefits of hiring a facility management service company in Bangladesh. The first benefit is that you can get the best facility management services at the best prices. Hiring a company can be done at very low cost and you will not have to spend much on maintenance and other services. Another benefit is that you will be able to get the best services with the best facilities and tools. A professional facility management service company can provide you with the best facilities and services to increase your success and will ensure that they are operating in a clean, safe condition. Many companies have their own cleaning crews which use chemicals on materials and equipment to keep them looking good but actually do little for safety or environmental protection.</p><h2><strong>Why choose us?</strong></h2><p>We have a vast experience in all kind of facility management services like <a href=\"https://maxenterprise.com.bd/cleaning-service-company-in-bangladesh/\">cleaning services in Dhaka</a>, housekeeping, pest control, manpower, movers, security and much more. Our staff is well trained and has immense knowledge in their respective fields. Our clients get access to our specialized expertise, which enables them to manage their <a href=\"https://en.wikipedia.org/wiki/Facility\">facilities</a> effectively and efficiently. In our <a href=\"https://maxenterprise.com.bd/facility-management-services-in-bangladesh/\">facility management company</a>, we make sure that the structures and spaces in your facilities are safe as well as comfortable for you. &nbsp;Across a wide array of areas covered by us under these services within our Lean approach, we will optimize all services to achieve maximum results with minimum resources. Technical project management is also a part of our overall facility maintenance and facilities operations through that are cost effective and in accordance with current national standards.</p><p>Everything about your facilities is monitored by us, so you have total peace-of-mind when it comes to your property as well as its upkeep. We offer facility management service in Dhaka cities like Gulshan, Banani, Dhanmondi, Mirpur, Badda, Zatrabari, Saidabad, etc. If there’s anything that needs attention within any one of these areas covered above then feel free to call or e-mail us at any time. Our dedicated professionals are constantly ready at hand to address all your facility management needs.</p>', 'bLog', '2025-07-05 23:41:48', '2025-07-05 23:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bgimg` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `wave` varchar(255) DEFAULT NULL,
  `project` varchar(255) DEFAULT NULL,
  `cleaner` varchar(255) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `bgimg`, `img`, `title1`, `title2`, `wave`, `project`, `cleaner`, `customer`, `created_at`, `updated_at`) VALUES
(1, 'hero-bg.jpg', 'hero_4_1.png', 'We are here with', 'Expert', 'Cleaner', '5', '10', '1.5', '2025-07-03 23:52:04', '2025-07-03 23:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2025_07_01_162208_create_heroes_table', 2),
(15, '2025_07_01_184903_create_cleanings_table', 3),
(18, '2025_07_06_065706_create_abouts_table', 4),
(19, '2025_07_06_091930_create_portfolios_table', 5),
(20, '2025_07_06_150528_create_tesimonials_table', 6),
(21, '2025_07_06_161752_create_videos_table', 7),
(23, '2025_07_06_175948_create_websites_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `service`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Industrial', '2', '20250706093931.jpg', '2025-07-06 03:39:31', '2025-07-06 11:24:45'),
(2, 'Official', '3', '20250706101416.jpg', '2025-07-06 04:14:16', '2025-07-06 11:25:36'),
(3, 'Residencial', '2', '20250706101509.jpg', '2025-07-06 04:15:09', '2025-07-06 11:25:43'),
(4, 'Official', '3', '20250706122703.jpg', '2025-07-06 06:27:03', '2025-07-06 11:25:48'),
(5, 'Industrial', '1', '20250706122728.jpg', '2025-07-06 06:27:28', '2025-07-06 11:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `tesimonials`
--

CREATE TABLE `tesimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desig` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `review` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tesimonials`
--

INSERT INTO `tesimonials` (`id`, `name`, `desig`, `service`, `review`, `created_at`, `updated_at`) VALUES
(1, 'shahanaz', 'CEO of Uttara medical', '2', '<p>The clean service I recently received was nothing to an hide for every short of exceptional. From the moment they arrived, their a professionalism was evident, and they carried out their tasks with a utmost precision. Every nook and cranny was thoroughly cleaned, leaving my are a space spotless and refreshed. I was thoroughly impressed with their attention to detail and commitment to ensuring a pristine environment.</p>', '2025-07-06 09:30:55', '2025-07-06 11:28:48'),
(2, 'sabbir', 'CEO of webbugit', '3', '<p>The clean service I recently received was nothing to an hide for every short of exceptional. From the moment they arrived, their a professionalism was evident, and they carried out their tasks with a utmost precision. Every nook and cranny was thoroughly cleaned, leaving my are a space spotless and refreshed. I was thoroughly impressed with their attention to detail and commitment to ensuring a pristine environment.</p>', '2025-07-06 09:42:00', '2025-07-06 11:28:59'),
(3, 'Sourove', 'MD of webbugit', '2', '<p>The clean service I recently received was nothing to an hide for every short of exceptional. From the moment they arrived, their a professionalism was evident, and they carried out their tasks with a utmost precision. Every nook and cranny was thoroughly cleaned, leaving my are a space spotless and refreshed. I was thoroughly impressed with their attention to detail and commitment to ensuring a pristine environment.</p>', '2025-07-06 09:42:00', '2025-07-06 11:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('superadmin','admin','user') NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sabbir', 'superadmin', 'demoadmin@gmail.com', NULL, '$2y$12$xNioWLbhkRRe/ELESnL0teCwO.rHeL2Bs.7/I/oAub98XQ2VwcAzO', NULL, '2025-06-30 09:56:02', '2025-06-30 09:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service` varchar(255) DEFAULT NULL,
  `embedid` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `service`, `embedid`, `created_at`, `updated_at`) VALUES
(1, '1', 'https://www.youtube.com/watch?v=9OuG3jT9Cv0', '2025-07-06 10:30:39', '2025-07-06 11:04:23'),
(2, '2', 'https://www.youtube.com/watch?v=JnX7Oc8LqD8', '2025-07-06 11:07:24', '2025-07-06 11:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slogan` mediumtext DEFAULT NULL,
  `map` mediumtext DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `hour` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `insta` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `name`, `slogan`, `map`, `address`, `phone`, `hour`, `email`, `fb`, `twitter`, `linkedin`, `insta`, `youtube`, `logo`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Max Enterprise', 'MAX Enterprise has 10 years of experience in this work field. We provide the best cleaning service, packing, and movers, pest control service in Bangladesh, house painting service.', '!1m18!1m12!1m3!1d4339.0458223437445!2d90.38542030734764!3d23.865207627469122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41c96811713%3A0xc00d7b9173ec4adb!2z4KaJ4Kak4KeN4Kak4Kaw4Ka-IOCmuOCnh-CmleCnjeCmn-CmsCDgp6fgp6og4Kaq4Ka-4Kaw4KeN4KaV!5e0!3m2!1sen!2sbd!4v1751826118909!5m2!1sen!2sbd', 'House 123, Road 4, Dhaka, Bangladesh', '+8801712345678', 'Sat-Thu 9am-7pm', 'info@mycompanybd.com', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', 'https://instagram.com/', 'https://youtube.com/', '20250706200120_logo.svg', '20250706195427icon.webp', '2025-07-06 12:26:47', '2025-07-06 14:07:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cleanings`
--
ALTER TABLE `cleanings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tesimonials`
--
ALTER TABLE `tesimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cleanings`
--
ALTER TABLE `cleanings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tesimonials`
--
ALTER TABLE `tesimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
