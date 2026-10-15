<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    private const DEGREE_MAP = [
        'bcom' => ['Bachelor of Commerce (B.Com)', 'B.Com', 'UG'],
        'ba' => ['Bachelor of Arts (BA)', 'BA', 'UG'],
        'bba' => ['Bachelor of Business Administration (BBA)', 'BBA', 'UG'],
        'bca' => ['Bachelor of Computer Applications (BCA)', 'BCA', 'UG'],
        'mba' => ['Master of Business Administration (MBA)', 'MBA', 'PG'],
        'mca' => ['Master of Computer Applications (MCA)', 'MCA', 'PG'],
        'mcom' => ['Master of Commerce (M.Com)', 'M.Com', 'PG'],
        'ma' => ['Master of Arts (MA)', 'MA', 'PG'],
        'bba_mba' => ['Integrated BBA + MBA Degree Program', 'Integrated', 'UG+PG'],
        'bca_mca' => ['Integrated BCA + MCA Degree Program', 'Integrated', 'UG+PG'],
    ];

    private const IMG_BASE = 'https://leamss.com/public/assets/web/';

    /**
     * Ported 1:1 from the live leamss.com online-degree-courses page.
     *
     * @return array<int, array<int, string|int>>
     */
    private function raw(): array
    {
        return [
            ['bcom', '', 'Amity University', 16500, '3 Years', 'courseimages/1723463674905.jpg', 'online-bcom-degree-amity-university'],
            ['ba', '', 'Amity University', 16500, '3 Years', 'courseimages/1723464351182.jpg', 'online-ba-degree-amity-university'],
            ['mba', 'Digital Marketing Management', 'Amity University', 49750, '2 Years', 'images/courses/course-img-1.png', 'online-mba-degree-amity-university-digital-marketing-management'],
            ['mca', 'Cyber Security', 'Amity University', 62500, '2 Years', 'courseimages/1723462620568.jpg', 'online-mca-degree-amity-university-cyber-security'],
            ['mca', 'Blockchain', 'Amity University', 42500, '2 Years', 'courseimages/1723463068645.jpg', 'online-mca-degree-amity-university-blockchain'],
            ['bba', 'Marketing Management', 'DY Patil Pune', 18500, '3 Years', 'courseimages/1725535382635.jpg', 'online-bba-degree-dy-patil-pune-in-marketing-management'],
            ['bba', 'Event Management', 'DY Patil Pune', 18500, '3 Years', 'courseimages/172605190268.webp', 'online-bba-degree-dy-patil-pune-in-envent-management'],
            ['bba', 'Human Resource', 'DY Patil Pune', 18500, '3 Years', 'courseimages/1726655693755.webp', 'online-bba-degree-dy-patil-pune-in-human-resource'],
            ['bba', 'Retail Operations', 'DY Patil Pune', 18500, '3 Years', 'courseimages/1726661855101.jpg', 'online-bba-degree-dy-patil-pune-in-retail-operations'],
            ['bba', 'Hospital Management', 'DY Patil Pune', 18500, '3 Years', 'courseimages/1726664511586.jpeg', 'online-bba-degree-dy-patil-pune-in-hospital-management'],
            ['bba', 'Investment Banking', 'DY Patil Pune', 18500, '3 Years', 'courseimages/1726813756880.jpg', 'online-bba-degree-dy-patil-pune-in-lnvestment-banking'],
            ['mca', 'Augmented Reality and Virtual Reality', 'Amity University', 62500, '2 Years', 'courseimages/1726821305891.webp', 'online-mca-degree-amity-university-augmented-reality-and-virtual-reality'],
            ['mca', 'Machine Learning & Artificial Intelligence', 'Amity University', 42500, '2 Years', 'courseimages/1726827136133.jpg', 'online-mca-degree-machine-learning-and-artificial-Intelligence'],
            ['mba', 'Data Science', 'Amity University', 49750, '2 Years', 'courseimages/1726831943851.jpg', 'online-mba-degree-amity-university-data-science'],
            ['mba', 'International Finance', 'Amity University', 74750, '2 Years', 'courseimages/172709176321.jpg', 'online-mba-degree-amity-university-International-finance'],
            ['mba', 'Business Analytics', 'Amity University', 49750, '2 Years', 'courseimages/1727332343683.jpg', 'online-mba-degree-amity-university-business-analytics'],
            ['mba', 'Digital Entrepreneurship', 'Amity University', 49750, '2 Years', 'courseimages/1727691923804.jpg', 'online-mba-degree-amity-university-digital-entrepreneurship'],
            ['bcom', '', 'Manipal University Jaipur', 16500, '3 Years', 'courseimages/1727695900547.jpg', 'online-bcom-degree-manipal-university-jaipur-bachelor-of-commerce'],
            ['bca', '', 'Manipal University Jaipur', 22500, '3 Years', 'courseimages/1727698500961.jpeg', 'online-bca-degree-manipal-university-jaipur-bachelor-of-computer-application'],
            ['mba', '', 'Manipal University Jaipur', 43750, '2 Years', 'courseimages/1727848132579.jpg', 'online-mba-degree-manipal-university-jaipur'],
            ['mba', 'Finance', 'Manipal University Jaipur', 43750, '2 Years', 'courseimages/172794537049.jpeg', 'online-mba-degree-manipal-university-jaipur-finance'],
            ['mba', 'Sales and Marketing', 'Manipal University Jaipur', 43750, '2 Years', 'courseimages/1727949938945.jpg', 'online-mba-degree-manipal-university-jaipur-sales-and-marketing'],
            ['mba', 'Human Resource Management', 'Manipal University Jaipur', 43750, '2 Years', 'courseimages/1727957126739.jpeg', 'online-mba-degree-manipal-university-jaipur-human-resource-management'],
            ['mba', 'Analytics & Data Science', 'Manipal University Jaipur', 43750, '2 Years', 'courseimages/1728023476467.png', 'online-mba-degree-manipal-university-jaipur-analytics-and-data-science'],
            ['mba', 'IT & FinTech', 'Manipal University Jaipur', 43750, '2 Years', 'courseimages/1728026335786.jpeg', 'online-mba-degree-manipal-university-jaipur-IT-and-finTech'],
            ['mba', 'Operations Management', 'Manipal University Jaipur', 43750, '2 Years', 'courseimages/1728027829421.jpg', 'online-mba-degree-manipal-university-jaipur-operations-management'],
            ['mba', 'International Business', 'Manipal University Jaipur', 43750, '2 Years', 'courseimages/1728030818601.jpeg', 'online-mba-degree-manipal-university-jaipur-international-business'],
            ['mba', 'Information System Management', 'Manipal University Jaipur', 43750, '2 Years', 'courseimages/1728040487182.jpeg', 'online-mba-degree-manipal-university-jaipur-information-system-management'],
            ['mba', 'Project Management', 'Manipal University Jaipur', 43750, '2 Years', 'courseimages/1728042525977.jpeg', 'online-mba-degree-manipal-university-jaipur-project-management'],
            ['mba', 'Supply Chain Management', 'Manipal University Jaipur', 43750, '2 Years', 'courseimages/1728044466484.jpeg', 'online-mba-degree-manipal-university-jaipur-supply-chain-management'],
            ['mba', 'Banking & Financial Services', 'Manipal University Jaipur', 43750, '2 Years', 'courseimages/1728283796349.jpg', 'online-mba-degree-manipal-university-jaipur-banking-financial-services-and-Insurance'],
            ['mcom', '', 'Manipal University Jaipur', 27000, '2 Years', 'courseimages/1728288011976.webp', 'online-mcom-degree-manipal-university-jaipur'],
            ['ma', 'Journalism & Mass Communication', 'Manipal University Jaipur', 35000, '2 Years', 'courseimages/1728291473508.webp', 'online-ma-degree-manipal-university-jaipur-master-of-arts-in-journalism-and-mass-communication'],
            ['mca', '', 'Manipal University Jaipur', 39500, '2 Years', 'courseimages/1728294321465.jpg', 'online-mca-degree-manipal-university-jaipur'],
            ['mca', 'Artificial Intelligence', 'Manipal University Jaipur', 39500, '2 Years', 'courseimages/1728297170750.jpeg', 'online-mca-degree-manipal-university-jaipur-artificial-intelligence'],
            ['mca', 'Cloud Computing', 'Manipal University Jaipur', 39500, '2 Years', 'courseimages/1728375164213.jpg', 'online-mca-degree-manipal-university-jaipur-cloud-computing'],
            ['mca', 'Cybersecurity', 'Manipal University Jaipur', 39500, '2 Years', 'courseimages/1728381585210.jpg', 'online-mca-degree-manipal-university-jaipur-cybersecurity'],
            ['mca', 'Data & Analytics', 'Manipal University Jaipur', 39500, '2 Years', 'courseimages/1728900104973.webp', 'online-mca-degree-manipal-university-jaipur-data-and-analytics'],
            ['ba', '', 'Sikkim Manipal University', 12500, '3 Years', 'courseimages/1729758725409.jpg', 'online-ba-degree-sikkim-manipal-university'],
            ['mba', '', 'Sikkim Manipal University', 27500, '2 Years', 'courseimages/1730804875568.webp', 'online-mba-degree-sikkim-manipal-university'],
            ['mca', '', 'Sikkim Manipal University', 24500, '2 Years', 'courseimages/1730894659959.jpeg', 'online-mca-degree-sikkim-manipal-university'],
            ['ma', '', 'Sikkim Manipal University', 18750, '2 Years', 'courseimages/1731662774492.jpg', 'online-ma-degree-sikkim-manipal-university'],
            ['mba', 'Sales and Marketing', 'Jain University', 40000, '2 Years', 'courseimages/1731666932852.jpg', 'online-mba-degree-jain-sales-and-marketing'],
            ['mba', 'Finance', 'Jain University', 40000, '2 Years', 'courseimages/1731668807198.jpg', 'online-mba-degree-jain-finance'],
            ['mba', 'Human Resource Management', 'Jain University', 40000, '2 Years', 'courseimages/1731670894650.jpg', 'online-mba-degree-jain-human-resource-management'],
            ['mba', 'General Management', 'Jain University', 40000, '2 Years', 'courseimages/1732532192780.webp', 'online-mba-degree-jain-general-management'],
            ['mba', 'Systems and Operations Management', 'Jain University', 49000, '2 Years', 'courseimages/1732534862864.jpg', 'online-mba-degree-jain-systems-and-operations-management'],
            ['mba', 'Human Resource Management and Finance', 'Jain University', 54000, '2 Years', 'courseimages/1733120650216.png', 'online-mba-degree-jain-human-resource-management-and-finance'],
            ['bca', 'Cloud and Security', 'Amity University', 37500, '3 Years', 'courseimages/1733123822699.png', 'online-bca-degree-amity-university-cloud-and-security'],
            ['mca', 'Machine Learning & Artificial Intelligence', 'Amity University', 62500, '2 Years', 'courseimages/1733725341136.webp', 'online-mca-degree-amity-university-machine-learning-and-artificial-Intelligence'],
            ['mba', 'Finance and Marketing', 'Jain University', 54000, '2 Years', 'courseimages/173372780086.jpg', 'online-mba-degree-jain-finance-and-marketing'],
            ['mba', 'Marketing and Human Resource Management', 'Jain University', 54000, '2 Years', 'courseimages/1733911922691.jpg', 'online-mba-degree-jain-marketing-and-human-resource-management'],
            ['mba', 'Logistics and Supply Chain Management', 'Jain University', 54000, '2 Years', 'courseimages/1733914372914.jpg', 'online-mba-degree-jain-logistics-and-supply-chain-management'],
            ['mba', 'Project Management', 'Jain University', 54000, '2 Years', 'courseimages/1734082689315.jpg', 'online-mba-degree-jain-project-management'],
            ['mba', 'Information Technology Management', 'Jain University', 54000, '2 Years', 'courseimages/1734430694902.jpg', 'online-mba-degree-jain-Information-technology-management'],
            ['mba', 'Business Intelligence and Analytics', 'Jain University', 54000, '2 Years', 'courseimages/1734591216882.jpg', 'online-mba-degree-jain-business-intelligence-and-analytics'],
            ['mba', 'Hospital and Healthcare Management', 'DY Patil Pune', 42500, '2 Years', 'courseimages/1734594053137.jpg', 'Online-mba-degree-dy-patil-pune-hospital-and-healthcare-management'],
            ['mba', 'Human Resource Management', 'DY Patil Pune', 42500, '2 Years', 'courseimages/1734596703608.jpg', 'online-mba-degree-dy-patil-pune-human-resource-management'],
            ['mba', 'Finance', 'DY Patil Pune', 42500, '2 Years', 'courseimages/1734600212186.jpg', 'online-mba-degree-dy-patil-pune-finance'],
            ['mba', 'Retail Management', 'DY Patil Pune', 42500, '2 Years', 'courseimages/1734603098389.jpg', 'online-mba-degree-dy-patil-pune-retail-management'],
            ['mba', 'Logistics & Supply Chain Management', 'DY Patil Pune', 42500, '2 Years', 'courseimages/1734606428153.jpg', 'Online-mba-degree-dy-patil-pune-logistics-and-supply-chain-management'],
            ['mba', 'Digital Marketing', 'DY Patil Pune', 42500, '2 Years', 'courseimages/1734695158810.jpg', 'online-mba-degree-dy-patil-pune-digital-marketing'],
            ['mba', 'International Business', 'DY Patil Pune', 42500, '2 Years', 'courseimages/1734767346823.jpg', 'online-mba-degree-dy-patil-pune-international-business'],
            ['mba', 'Entrepreneurship Management', 'DY Patil Pune', 42500, '2 Years', 'courseimages/1734771840717.jpg', 'online-mba-degree-dy-patil-pune-entrepreneurship-management'],
            ['mba', 'Event Management', 'DY Patil Pune', 42500, '2 Years', 'courseimages/1734775072477.jpg', 'online-mba-degree-dy-patil-pune-event-management'],
            ['mba', 'Data Science and Business Analytics', 'DY Patil Pune', 42500, '2 Years', 'courseimages/1734779237386.jpg', 'online-mba-degree-dy-patil-pune-data-science-and-business-analytics'],
            ['mba', 'Sales and Marketing', 'DY Patil Pune', 42500, '2 Years', 'courseimages/1734939530111.jpg', 'online-mba-degree-dy-patil-pune-sales-and-marketing'],
            ['mba', 'Entrepreneurship and Leadership', 'Jain University', 54000, '2 Years', 'courseimages/1734942593217.jpg', 'online-mba-degree-jain-entrepreneurship-and-leadership'],
            ['mba', 'International Finance (Accredited by ACCA, UK)', 'Jain University', 70000, '2 Years', 'courseimages/1735284215738.jpg', 'online-mba-degree-jain-international-finance'],
            ['mba', 'Data Science and Analytics', 'Jain University', 60000, '2 Years', 'courseimages/173529187396.jpg', 'online-mba-degree-jain-data-science-and-analytics'],
            ['mba', 'Digital Marketing and E-Commerce', 'Jain University', 60000, '2 Years', 'courseimages/173529824361.jpg', 'online-mba-degree-jain-digital-marketing-and-ECommerce'],
            ['mba', 'Banking and Finance', 'Jain University', 55000, '2 Years', 'courseimages/1737705884799.jpg', 'online-mba-degree-jain-banking-and-finance'],
            ['mba', 'Retail Banking Operations', 'Jain University', 54000, '2 Years', 'courseimages/1737710707665.jpg', 'jain-university-online-retail-banking-operations-course'],
            ['mba', 'Artificial Intelligence', 'Jain University', 60000, '2 Years', 'courseimages/1737715390415.jpg', 'jain-university-online-artificial-intelligence-course'],
            ['mca', 'Computer Science and IT', 'Jain University', 37500, '2 Years', 'courseimages/173795796789.jpg', 'jain-university-online-computer-science-it-course'],
            ['mca', 'Data Analytics', 'Jain University', 40000, '2 Years', 'courseimages/1741771633695.jpg', 'jain-university-online-data-analytics-course'],
            ['bba_mba', '', 'Amity University', 57633, '4.5 Years', 'courseimages/1741780592212.jpg', 'online-bba+mba-degree-amity-university'],
            ['bca_mca', '', 'Amity University', 50666, '4.5 Years', 'courseimages/174599357360.jpeg', 'online-bca+mca-degree-amity-university'],
            ['ma', 'Sociology', 'Sikkim Manipal University', 18750, '2 Years', 'courseimages/1745996475945.jpg', 'online-ma-degree-sikkim-manipal-university-sociology'],
            ['ma', 'Economics', 'Manipal University Jaipur', 20000, '2 Years', 'courseimages/1745999086654.jpg', 'online-ma-degree-manipal-university-jaipur-economics'],
            ['ma', 'Political Science', 'Sikkim Manipal University', 18750, '2 Years', 'courseimages/1746009043382.jpg', 'online-ma-degree-sikkim-manipal-university-political-science'],
            ['mba', 'Sales and Marketing', 'Sikkim Manipal University', 27500, '2 Years', 'courseimages/1746011653775.jpg', 'online-mba-degree-sikkim-manipal-university-sales-and-marketing'],
            ['mba', 'Finance', 'Sikkim Manipal University', 27500, '2 Years', 'courseimages/1746013459908.jpg', 'online-mba-degree-sikkim-manipal-university-finance'],
            ['mba', 'Human Resource Management', 'Sikkim Manipal University', 27500, '2 Years', 'courseimages/1746083834466.jpg', 'online-mba-degree-sikkim-manipal-university-human-resource-management'],
            ['mba', 'Information System Management', 'Sikkim Manipal University', 27500, '2 Years', 'courseimages/1746085935806.jpg', 'online-mba-degree-sikkim-manipal-university-information-system-management'],
            ['mba', 'Operations & Supply Chain Management', 'Sikkim Manipal University', 27500, '2 Years', 'courseimages/1751344577159.jpg', 'online-mba-degree-sikkim-manipal-university-operations-and-supply-chain-management'],
            ['mcom', 'Financial Management', 'Amity University', 30000, '2 Years', 'courseimages/175134738342.jpg', 'online-mcom-degree-amity-university-financial-management'],
            ['mcom', 'Financial Technology', 'Amity University', 30000, '2 Years', 'courseimages/175134738342.jpg', 'online-mcom-degree-amity-university-financial-technology'],
        ];
    }

    public function run(): void
    {
        foreach ($this->raw() as $sort => [$key, $spec, $university, $fee, $duration, $imagePath, $slug]) {
            [$degree, $degreeType, $level] = self::DEGREE_MAP[$key];

            Course::updateOrCreate(
                ['id' => $slug],
                [
                    'sort' => $sort,
                    'degree' => $degree,
                    'spec' => $spec,
                    'university' => $university,
                    'degree_type' => $degreeType,
                    'level' => $level,
                    'fee_per_semester' => $fee,
                    'duration' => $duration,
                    'image' => '/course-images/'.basename($imagePath),
                    'link' => 'https://leamss.com/course-details/'.$slug,
                ]
            );
        }
    }
}
