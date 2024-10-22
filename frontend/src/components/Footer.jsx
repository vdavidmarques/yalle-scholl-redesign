import { useEffect, useState } from "react";
import apiService from "../services/apiService";
import { Link } from "react-router-dom";

const Footer = () => {
  const slug = "main-menu";
  const [menuItems, setMenuItems] = useState([]);

  const [generalInformationItems, setGeneralInformationItems] = useState([]);

  useEffect(() => {
    apiService
      .getHeaderMenu(slug)
      .then((response) => {
        setMenuItems(response.data);
        setGeneralInformationItems(response.data);
      })
      .catch((error) => {
        console.log(error);
      });

    apiService
      .getGeneralInformationData()
      .then((response) => {
        setGeneralInformationItems(response.data);
      })
      .catch((error) => {
        console.log(error);
      });
  }, []);

    return (
    <footer>
      <nav>
        <ul>
          {menuItems?.length > 0 &&
            menuItems.map((item) => (
              <li key={item.ID} className={`menu-item-${item.ID}`}>
                <Link to={item.url} target={item?.target}>
                  {item.title}
                </Link>
              </li>
            ))}
        </ul>
      </nav>
      {generalInformationItems?.length > 0 &&
        generalInformationItems.map((option, index) => (
          <div key={`general-information-footer-${index}`} className={`general-infos-item-${option.id}`}>
            <p>
              {option?.acf?.facebook}
            </p>
            <p>
              {option?.acf?.instagram}
            </p>
            <p>
              {option?.acf?.linkedin}
            </p>
            <p>
              {option?.acf?.pinterest}
            </p>
            <p>
              {option?.acf?.youtube}
            </p>
            <p>
              {option?.acf?.address} 
            </p> 
            
          </div>
        ))}
        © 2024 -All rights reserver
    </footer>
  );
};

export default Footer;
