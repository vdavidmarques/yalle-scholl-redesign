import React, { useEffect, useState } from "react";
import apiService from "../services/apiService";

const NewsLetter = () => {
  const [generalInformationItems, setGeneralInformationItems] = useState([]);
  useEffect(() => {
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
    <section className="newsletter">
         {generalInformationItems?.length > 0 &&
        generalInformationItems.map((option, index) => (
          <div key={`general-information-newsletters-${index}`} className={`general-infos-item-newsletters-${option.id}`}>   
            {option?.acf?.mainTitleNewsletter}
            {option?.acf?.buttonLabelNewsletter}
            {/* {console.log(option.acf.buttonLabelNewsletter)} */}
          </div>
        ))}
    </section>
    );
};
export default NewsLetter;
