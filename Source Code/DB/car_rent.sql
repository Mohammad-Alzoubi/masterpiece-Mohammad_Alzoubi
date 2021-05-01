-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 12:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad', 'admin@gmail.com', '123123', 'default.png', '2021-04-30 19:46:06', '2021-05-01 04:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pickup_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_Date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_Time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_Date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_Time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `pickup_location`, `drop_location`, `pickup_Date`, `pickup_Time`, `drop_Date`, `drop_Time`, `created_at`, `updated_at`) VALUES
(1, 'Alabama', 'Alaska', '2021-05-02', '12:00', '2021-05-04', '12:00', '2021-05-01 05:27:02', '2021-05-01 05:27:02'),
(2, 'Alabama', 'Alaska', '2021-05-02', '12:00', '2021-05-04', '12:00', '2021-05-01 05:54:29', '2021-05-01 05:54:29'),
(3, 'Madaba City & Hotel Delivery', 'King Hussein International Airport', '2021-05-04', '12:00', '2021-05-05', '12:00', '2021-05-01 06:49:57', '2021-05-01 06:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'HYUNDAI', '2021-04-30 20:03:35', '2021-04-30 20:03:35'),
(2, 'KIA', '2021-04-30 20:03:48', '2021-04-30 20:03:48'),
(3, 'CHEVROLET', '2021-04-30 20:03:57', '2021-04-30 20:03:57'),
(4, 'MITSUBISHI', '2021-04-30 20:04:19', '2021-04-30 20:04:19'),
(5, 'TOYOTA', '2021-04-30 20:04:40', '2021-04-30 20:04:40'),
(7, 'MERCEDES', '2021-04-30 20:05:29', '2021-04-30 20:05:29'),
(8, 'BMW', '2021-04-30 20:05:41', '2021-04-30 20:05:41'),
(9, 'NISSAN', '2021-04-30 20:05:57', '2021-04-30 20:05:57'),
(10, 'FORD', '2021-04-30 20:07:00', '2021-04-30 20:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '07',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `image`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'mohammad', 'user@gmail.com', '123123', 'default.png', '0778872370', '2021-05-01 05:54:06', '2021-05-01 05:54:53'),
(2, 'test', 'test@gmail.com', 'test@12345', 'default.png', '07', '2021-05-01 06:11:08', '2021-05-01 06:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_04_03_193139_create_contacts_table', 1),
(4, '2021_04_05_074000_create_admins_table', 1),
(5, '2021_04_05_123316_create_brands_table', 1),
(6, '2021_04_05_234748_create_vehicles_table', 1),
(7, '2021_04_09_130547_create_customers_table', 1),
(8, '2021_04_09_200308_create_bookings_table', 1),
(9, '2021_04_16_134511_create_order_vehicles_table', 1),
(10, '2021_04_27_231938_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_vehicles`
--

CREATE TABLE `order_vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicles_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `vehiclesName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` double(8,2) NOT NULL,
  `FromDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ToDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DrivingImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdentityImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not Confirmed yet',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_vehicles`
--

INSERT INTO `order_vehicles` (`id`, `vehicles_id`, `customer_id`, `booking_id`, `vehiclesName`, `customerName`, `total_price`, `FromDate`, `ToDate`, `DrivingImage`, `IdentityImage`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, 'MITSUBISHI PAJERO', 'mohammad', 170.00, '2021-05-02', '2021-05-04', '1619859293.png', '1619859293.png', 'Not Confirmed yet', '2021-05-01 05:54:53', '2021-05-01 05:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `comfort` int(11) DEFAULT NULL,
  `driving` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `VehiclesTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VehiclesOverview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VehicleDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModelYear` bigint(20) NOT NULL,
  `VehicleImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL DEFAULT 1.00,
  `FuelType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransmissionGuide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Doors` bigint(20) NOT NULL,
  `Passengers` bigint(20) NOT NULL,
  `Luggages` bigint(20) NOT NULL,
  `Brand_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'color',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `AudioInput` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Wheel_drive` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `GPS_Navigation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Parking_Sensors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Bluetooth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `USB_input` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Safe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `WI_FI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Heated_Seats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `FM_Radio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Air_Conditioner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Sunroof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `VehiclesTitle`, `VehiclesOverview`, `VehicleDescription`, `ModelYear`, `VehicleImage`, `price`, `discount`, `FuelType`, `TransmissionGuide`, `Doors`, `Passengers`, `Luggages`, `Brand_id`, `color`, `status`, `AudioInput`, `Wheel_drive`, `GPS_Navigation`, `Parking_Sensors`, `Bluetooth`, `USB_input`, `Safe`, `WI_FI`, `Heated_Seats`, `FM_Radio`, `Air_Conditioner`, `Sunroof`, `created_at`, `updated_at`) VALUES
(1, 'HYUNDAI ACCENT', 'Is a subcompact car produced by Hyundai', 'The Hyundai Accent (Korean: 현대 엑센트), or Hyundai Verna (현대 베르나) is a subcompact car produced by Hyundai. In Australia, the first generation models carried over the Hyundai Excel name used by the Accent\'s predecessor. The Accent was replaced in 2000 by the Hyundai Verna in South Korea, although most international markets, including the US, retained the \"Accent\" name. The \"Accent\" name is an abbreviation of Advanced Compact Car of Epoch-making New Technology', 1994, '1619824503.png', 25.00, 0.00, 'diesel', 'Auto', 4, 5, 4, 1, 'red', '1', '1', '1', NULL, NULL, '1', '1', '1', NULL, '1', '1', '1', NULL, '2021-04-30 20:15:03', '2021-04-30 20:15:03'),
(2, 'MITSUBISHI PAJERO', 'Mitsubishi marketed the SUV as the Montero in Spain', 'Mitsubishi marketed the SUV as the Montero in Spain and the Americas (except for Brazil and Jamaica) and as the Shogun in the United Kingdom, but is no longer sold in North America as of late 2006.[7] The Pajero nameplate derives from Leopardus pajeros, the Pampas cat.[8]  The Pajero has earned a respected legacy in rally and are particularly noted for having won the Dakar Rally 12 times, having the highest number of Dakar Rally stage wins (nearly twice that of the nearest competitor), and seizing 80% of Dakar Rally podium finishes from 2001-2005.[9] Records for which Mitsubishi earned a place in the Guinness World Records and are currently unbeaten.', 2020, '1619824876.png', 85.00, 0.00, 'petrol', 'Auto', 4, 7, 6, 4, 'gray', '0', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '2021-04-30 20:21:16', '2021-05-01 05:54:53'),
(3, 'BMW 520', 'The BMW 5 Series is an executive car manufactured by BMW', 'The BMW 5 Series is an executive car manufactured by BMW since 1972. It is the successor to the New Class Sedans and is currently in its seventh generation.  Initially, the 5 Series was only available in a sedan body style. The wagon/estate body style (called \"Touring\") was added in 1991 and the 5-door fastback (called \"Gran Turismo\") was produced from 2009 to 2017.  The first generation of 5 Series was powered by naturally aspirated four-cylinder and six-cylinder petrol engines. Following generations have been powered by four-cylinder, six-cylinder, V8 and V10 engines that are either naturally aspirated or turbocharged. Since 1982, diesel engines have been included in the 5 Series range.  The 5 Series is BMW\'s second best-selling model after the 3 Series. On 29 January 2008, the 5 millionth 5 Series was manufactured, a 530d sedan in Carbon Black Metallic.', 2020, '1619825086.png', 95.00, 0.00, 'petrol', 'Auto', 4, 5, 3, 8, 'blue', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-04-30 20:24:46', '2021-04-30 20:24:46'),
(4, 'KIA PICANTO', 'Picanto made its debut at the Geneva Motor Show in 2011.', 'The second generation Picanto made its debut at the Geneva Motor Show in 2011. Designed by Kia\'s European design team based in Frankfurt, Germany, under the direction of Peter Schreyer, the new model is longer in wheelbase and overall length than its predecessor. The Picanto is offered with a choice of two gasoline engines: a 1.0 liter three-cylinder or a 1.25 liter four-cylinder. The Europe-spec 1.25 liter engine features ecoDynamics, Kia\'s start-stop system.[28] In addition, there is also a petrol/LPG version of the 1.0 liter engine available. The Brazil version is equipped with a flex fuel version of the 1.0 liter engine that uses both petrol and ethanol.  The Picanto was available worldwide (except North America, Venezuela, China, and Singapore) as a 5-door hatchback while the European market received the exclusive 3-door variant.The 3-door version is the same length as the 5-door model, but it sports new windows and doors, different bumpers and a front grille with silver or red trim. In South Korea, the Morning is offered in a Sport Pack, which consists of the 3-door\'s front and rear bumpers, as well as a digital speedometer.', 2018, '1619825288.png', 24.00, 0.00, 'diesel', 'Auto', 5, 4, 2, 2, 'white', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2021-04-30 20:28:08', '2021-04-30 20:28:08'),
(5, 'CHEVROLET COBALT', 'The Chevrolet Cobalt is a compact car introduced by Chevrolet', 'The Chevrolet Cobalt is a compact car introduced by Chevrolet in 2004 for the 2005 model year. The Cobalt replaced both the Cavalier and the Toyota-based Geo/Chevrolet Prizm as Chevrolet\'s compact car. The Cobalt was available as both a coupe and sedan, as well as a sport compact version dubbed the Cobalt SS. Like the Chevrolet HHR and the Saturn ION, it was based on the GM Delta platform.  A Pontiac version was sold in the United States and Mexico under the G5 name for 2007–2009. It was sold as the Pontiac G4 in Mexico for 2005–2006 and as the Pontiac G5 in Canada for its entire run (where it was briefly known as the Pontiac Pursuit and later Pontiac G5 Pursuit). The G5 replaced the Cavalier-related Pontiac Sunfire. While the Cobalt was available as a 2-door coupe and a 4-door sedan in all markets it was offered in, the G5 was only available as a coupé in the United States while a sedan version was sold alongside the coupé in Canada and Mexico.  As with their predecessors, all Cobalts and its Pontiac equivalents were manufactured at GM\'s plant in Ramos Arizpe, Mexico and Lordstown, Ohio. The United States Environmental Protection Agency classified the Cobalt as a subcompact car.', 2004, '1619825534.png', 28.00, 0.00, 'petrol', 'Auto', 4, 5, 3, 3, 'gray', '1', '1', '1', NULL, NULL, '1', '1', '1', NULL, '1', '1', '1', NULL, '2021-04-30 20:32:14', '2021-04-30 20:43:28'),
(6, 'KIA RIO', 'KIA RIO', 'The Kia Rio is a subcompact car produced by the South Korean manufacturer Kia since November 1999 and now in its fourth generation. Body styles have included a three and five-door hatchback and four-door sedan, equipped with inline-four gasoline and diesel engines, and front-wheel drive.  The Rio replaced the first generation Pride—a rebadged version of the Ford Festiva—and the Avella, a subcompact sold as a Ford in some markets. A second generation was introduced in 2005 in Europe and 2006 in North America, sharing its platform with the Hyundai Accent, a subcompact manufactured by its sister Hyundai Motor Company in South Korea.', 2016, '1619825715.png', 30.00, 0.00, 'CNG', 'Auto', 4, 5, 3, 2, 'red', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-04-30 20:35:15', '2021-04-30 20:35:15'),
(7, 'TOYOTA LAND CRUISER', 'TOYOTA LAND CRUISER', 'The Toyota Land Cruiser is a series of four-wheel drive vehicles produced by the Japanese automobile manufacturer Toyota. It is Toyota\'s longest running series of models and the second longest-running SUV in production behind the Chevrolet Suburban. As of 2019, the sales of the Land Cruiser totalled more than 10 million units worldwide.  Production of the first generation of the Land Cruiser began in 1951 as Toyota\'s version of a Jeep-like vehicle.The Land Cruiser has been produced in convertible, hardtop, station wagon and cab chassis body styles. The Land Cruiser\'s reliability and longevity have led to huge popularity, especially in Australia, where it is the best-selling body-on-frame, four-wheel drive vehicle. Toyota also extensively tests the Land Cruiser in the Australian outback – considered to be one of the toughest operating environments in both temperature and terrain. In Japan, the Land Cruiser is exclusive to Toyota Japanese dealerships called Toyota Store.  As of 2018, the Land Cruiser (J200) is available in many markets. Exceptions include Canada, Malaysia (which receives the Lexus LX instead), Hong Kong, Macau, Singapore, South Korea, Brazil, Thailand, and large parts of Europe. In Europe, the only countries where the Land Cruiser is officially sold are Gibraltar, Moldova, Russia, and Ukraine. The Land Cruiser is also hugely popular in Africa, where it is used by farmers, NGO\'s, UN and humanitarian organizations, by national armies (often the pickup version) as well as by irregular armed groups who turn them into \'technicals\' by mounting machine guns in the rear.', 2019, '1619825877.png', 120.00, 0.00, 'petrol', 'Auto', 4, 7, 6, 5, 'white', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-04-30 20:37:57', '2021-04-30 20:37:57'),
(8, 'HYUNDAI SONATA', 'The first Sonata was introduced to compete with the Daewoo', 'The first Sonata was introduced to compete with the Daewoo Royale series and was a more luxurious version of the Stellar. It included cruise control, power seats, head lamp washers, power brakes, electric operated adjustable side mirrors and chrome bumper trims. The Sonata was available with two trim options in Korea: Luxury and Super (the latter only available with a 2.0-liter engine). In the domestic market Hyundai attempted to sell the Sonata as an executive car using catchphrases like \"Luxury car for VIP\"; however, as the Sonata was based on the Stellar without any redesigning it was seen by the public as no different than a luxury version of the Stellar. In 1987 Hyundai added two tone color schemes and a trip computer option but sales soon went down and the car was discontinued in December of that year. The Sonata was sold only in the South Korean domestic markets. The vehicle was unveiled in South Korea on 4 November 1985.  Engine choices included 1.6-liter Mitsubishi Saturn (only available outside the domestic market), 1.8- and 2.0-liter Mitsubishi Sirius inline-fours. The latter unit also found its way into the 1987 and later Stellar, and in MPI form the 1986 Hyundai Grandeur. The body was a largely unchanged Hyundai Stellar.  It was sold in New Zealand (right hand drive)[citation needed] with the 1.6-liter Mitsubishi engine with the five-speed manual gearbox; an automatic transmission was an optional extra. The original importer was a unit of the Auckland-based Giltrap Motor Group.  The final version of the Stellar was known as the Stellar 88 and was launched to celebrate the 1988 Summer Olympics in Seoul. Afterwards, Hyundai discontinued the Stellar and replaced it with the all-new Sonata.', 2019, '1619826108.png', 35.00, 0.00, 'petrol', 'Auto', 4, 5, 3, 1, 'gray', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-04-30 20:41:48', '2021-04-30 20:41:48'),
(9, 'FORD FUSION', 'FORD FUSION', 'The Ford Fusion is a four-door, five-passenger mid-size sedan manufactured and marketed by the Ford Motor Company. From the 2006 through 2020 model years, two generations of the Fusion have been produced in gasoline, gas/electric hybrid, and gas/plug-in electric hybrid variants. The Fusion was manufactured at Ford\'s Hermosillo Stamping and Assembly plant in Sonora, Mexico, alongside its rebadged variant the Lincoln MKZ, and formerly the Mercury Milan, both of which share its CD3 platform.  Production on the first Fusions began on August 1, 2005. The Fusion replaced the Mondeo for the Latin American markets—except in Argentina (where the current European Mondeo is available) and in the United States and Canada (where it superseded the then mid-size Taurus and the compact Contour). The Fusion is positioned between the compact Ford Focus and the full-size Ford Taurus. In the Middle East, this model is sold alongside the Mondeo. Versions sold there are available only with the 2.5-liter engine. Unlike in the United States, Canada, and Latin America, no V6 engine is available in that region. The same is true in South Korea, where only the 2.5-liter engines (including those for the hybrid model) are available as of the 2012 model year.', 2018, '1619826506.png', 30.00, 0.00, 'petrol', 'Auto', 4, 5, 2, 10, 'black', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-04-30 20:48:26', '2021-04-30 20:48:26'),
(10, 'MERCEDES - BENZ', 'Mercedes-Benz, commonly referred to as Mercedes,', 'Mercedes-Benz, commonly referred to as Mercedes, is both a German automotive marque and, from late 2019 onwards, a subsidiary – as Mercedes-Benz AG – of Daimler AG. Mercedes-Benz is known for producing luxury vehicles and commercial vehicles. The headquarters is in Stuttgart, Baden-Württemberg. The name first appeared in 1926 as Daimler-Benz.[clarification needed] In 2018, Mercedes-Benz was the largest seller of premium vehicles in the world, having sold 2.31 million passenger cars.  The company\'s origins come from Daimler-Motoren-Gesellschaft\'s 1901 Mercedes and Karl Benz\'s 1886 Benz Patent-Motorwagen, which is widely regarded as the first internal combustion engine in a self-propelled automobile. The fuel was not gasoline, but rather a much more volatile petroleum spirit called ligroin. The slogan for the brand is \"the best or nothing\".', 2020, '1619826691.png', 65.00, 0.00, 'petrol', 'Auto', 4, 5, 4, 7, 'blue', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-04-30 20:51:31', '2021-05-01 04:40:43'),
(11, 'HYUNDAI H-1', 'HYUNDAI H-1', 'POWER SLIDING DOOR Take comfort to a whole new level with an electrically operated sliding door that allows passengers to get on/off the vehicle effortlessly.  SMART VIEW A 360° view from 4 cameras installed around the car makes parking an easy affair. You can choose from a selection of camera views to display the required picture and provide you with the most confidence in maneuvering the vehicle.', 2017, '1619854190.png', 70.00, 0.00, 'petrol', 'Manual', 4, 8, 7, 1, 'black', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', NULL, '2021-05-01 04:29:50', '2021-05-01 04:29:50'),
(12, 'KIA CARNIVAL', 'Boldly innovative and undeniably versatile,', 'Boldly innovative and undeniably versatile, the all-new 2016 Carnival MPV is built for your bring-it-on life. With best-in-class power and cargo space, a suite of driver assist technologies, practical family-focused innovations, and SUV-inspired design, it’s a radical departure from the usual.', 2016, '1619854434.png', 60.00, 0.00, 'diesel', 'Manual', 4, 8, 4, 2, 'white', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-05-01 04:33:54', '2021-05-01 04:33:54'),
(14, 'MERCEDES G63', 'MERCEDES G63', 'The Mercedes-Benz G-Class, sometimes called G-Wagen (short for Geländewagen, \"terrain vehicle\") or anglicized as G-Wagon, is a mid-size four-wheel drive luxury SUV manufactured by Magna Steyr (formerly Steyr-Daimler-Puch) in Austria and sold by Mercedes-Benz. In certain markets, it has been sold under the Puch name as Puch G.  The G-Wagen is characterised by its boxy styling and body-on-frame construction. It uses three fully locking differentials, one of the few vehicles to have such a feature.  Despite the introduction of an intended replacement, the unibody SUV Mercedes-Benz GL-Class in 2006, the G-Class is still in production and is one of the longest-produced vehicles in Daimler\'s history, with a span of 41 years. Only the Unimog surpasses it.   A Puch G branded example The success and longevity of the G-Class has reached another milestone: 400,000th unit was built on 4 December 2020. The 300,000th unit was built three years ago in 2017.', 2021, '1619854786.png', 150.00, 0.00, 'petrol', 'Manual', 4, 4, 4, 7, 'black', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-05-01 04:39:46', '2021-05-01 04:39:46'),
(15, 'MERCEDES - VIANO', 'MERCEDES - VIANO', 'The Mercedes-Benz Vito is a minivan (M) produced by Mercedes-Benz. It is available as a standard panel van for cargo (called Vito), or with passenger accommodations substituted for part or all of the load area (called V-Class or Viano).  The V-Class/Viano is a large MPV. The first generation went on sale in 1996. The second generation was introduced in 2004, and the vehicle received the new Viano name. In 2010, the vehicle was facelifted with revised front and rear bumpers and lights. The interior was also improved with upgraded materials and new technology. The third generation was launched in 2014 and returned to being called V-Class.  The Viano is available in both rear- and four-wheel-drive configurations and comes in three lengths, two wheelbases and a choice of four petrol and diesel engines (as well as two specialist tuned models) coupled to either a six-speed manual or five-speed TouchShift automatic transmission.', 2019, '1619855010.jpg', 80.00, 0.00, 'diesel', 'Manual', 4, 6, 6, 7, 'black', '1', '1', '1', '1', NULL, '1', NULL, '1', '1', NULL, '1', '1', '1', '2021-05-01 04:43:30', '2021-05-01 04:43:30'),
(16, 'FORD - F350', 'FORD - F350', 'The Super Duty trucks utilize a distinct chassis from the lighter F-150, with heavier-duty chassis and suspension components to allow for higher payload and towing capacities; additionally, the product line continued the use of Ford PowerStroke diesel engines. With a GVWR over 8,500 lb (3,900 kg), Super Duty pickups are class 2 and 3 trucks while chassis cab trucks are class 4 and class 5. The F-Series Super Duty has been used as the base chassis of the Ford Excursion full-size SUV.  Ford F-250 to F-550 Super Duty trucks are assembled at the Kentucky Truck Plant in Louisville, Kentucky, while medium-duty F-650 and F-750s are assembled at Ohio Assembly in Avon Lake, Ohio (prior to 2016, medium-duty trucks were assembled in the Blue Diamond Truck joint venture with Navistar in Mexico). As of 2016, the Ford Super Duty is sold in the United States, Canada, Mexico, Venezuela (F-250 and F-350), Suriname, Brazil (F-350/F-4000), Argentina (F-4000 only), Angola (F-250 and F-350), Cambodia, the Middle East, and Iceland (F-350 only) in LHD only. In Suriname, even though traffic is on the left side of the road, the import and registry of left hand drive vehicles is allowed. In Australia, it was officially imported in right hand drive from Brazil between 2001–06, however as of 2007, Ford no longer offers the Super Duty in Australia.', 2021, '1619855263.png', 90.00, 0.00, 'petrol', 'Manual', 4, 5, 12, 10, 'black', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '2021-05-01 04:47:43', '2021-05-01 04:47:43'),
(17, 'FORD - F150', 'FORD - F150', 'The Super Duty trucks utilize a distinct chassis from the lighter F-150, with heavier-duty chassis and suspension components to allow for higher payload and towing capacities; additionally, the product line continued the use of Ford PowerStroke diesel engines. With a GVWR over 8,500 lb (3,900 kg), Super Duty pickups are class 2 and 3 trucks while chassis cab trucks are class 4 and class 5. The F-Series Super Duty has been used as the base chassis of the Ford Excursion full-size SUV.  Ford F-250 to F-550 Super Duty trucks are assembled at the Kentucky Truck Plant in Louisville, Kentucky, while medium-duty F-650 and F-750s are assembled at Ohio Assembly in Avon Lake, Ohio (prior to 2016, medium-duty trucks were assembled in the Blue Diamond Truck joint venture with Navistar in Mexico). As of 2016, the Ford Super Duty is sold in the United States, Canada, Mexico, Venezuela (F-250 and F-350), Suriname, Brazil (F-350/F-4000), Argentina (F-4000 only), Angola (F-250 and F-350), Cambodia, the Middle East, and Iceland (F-350 only) in LHD only. In Suriname, even though traffic is on the left side of the road, the import and registry of left hand drive vehicles is allowed. In Australia, it was officially imported in right hand drive from Brazil between 2001–06, however as of 2007, Ford no longer offers the Super Duty in Australia.', 2020, '1619855420.jpg', 110.00, 0.00, 'petrol', 'Manual', 4, 5, 6, 10, 'black', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-05-01 04:50:20', '2021-05-01 04:50:20'),
(18, 'TOYOTA HIACE', 'TOYOTA HIACE', 'The Toyota HiAce  (pronounced as \"High Ace\") is a light commercial van produced by the Japanese automobile manufacturer Toyota. First launched in October 1967, the HiAce has since been available in a wide range of body configurations, including a minivan/MPV, minibus, panel van, crew van, pickup truck, taxi  In Japan, the HiAce is exclusive to Toyopet Store locations.', 2014, '1619855683.jpg', 75.00, 0.00, 'petrol', 'Manual', 4, 5, 8, 5, 'white', '1', '1', '1', NULL, '1', '1', '1', '1', NULL, '1', NULL, '1', NULL, '2021-05-01 04:54:43', '2021-05-01 05:34:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_vehicles`
--
ALTER TABLE `order_vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_vehicles_vehicles_id_foreign` (`vehicles_id`),
  ADD KEY `order_vehicles_customer_id_foreign` (`customer_id`),
  ADD KEY `order_vehicles_booking_id_foreign` (`booking_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `reviews_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_brand_id_foreign` (`Brand_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_vehicles`
--
ALTER TABLE `order_vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_vehicles`
--
ALTER TABLE `order_vehicles`
  ADD CONSTRAINT `order_vehicles_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_vehicles_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_vehicles_vehicles_id_foreign` FOREIGN KEY (`vehicles_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_brand_id_foreign` FOREIGN KEY (`Brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
